<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;

class TSLCMSController extends AbstractController
{
    /**
     * @Route("/tslcms", name="tslcms")
     */
    public function index()
    {
        $theUser=$this->getUser();

        $login=$theUser->getLogin();
        $password=$theUser->getMdp();
        $nom=$theUser->getNom();
        $prenom=$theUser->getPrenom();
        $email=$theUser->getMail();
        $role=$theUser->getRole();

        $date = new \DateTime();
        $date= $date->getTimestamp();

        $url=$theUser->getIdSociete()->getUrllcms();
        $loginParam=$theUser->getIdSociete()->getLoginlcms();
        $mdpParam=$theUser->getIdSociete()->getMdplcms();

        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $superAdmin= $repository->find(0);

        if($url == null || $url =""){
            $ecmg_url = 'https://dgtconcept.e-learning-suite.com/';
            $soapParameters = Array('login' => $superAdmin->getLogin(), 'password' => $superAdmin->getMdp()) ;
        }
        else{
            $ecmg_url = $url;
            $soapParameters = Array('login' => $loginParam, 'password' => $mdpParam) ;
        }
        $client = new \SoapClient($ecmg_url.'ws.php?wsdl', $soapParameters);
        

        // on verifie si l'utilisateur existe deja ou non via son login
        $UserAlreadyExist = ($client->__call("getUserInfosByLogin",array('login' => $login)));
        
        if($UserAlreadyExist){
            $user = ($client->__call("getUserInfosByLogin",array('login' => $login)));
            $sso_key = $client->__call("createSSOSecurityKey",array('uid' => $user->id_membre));
            $sso_URL = $ecmg_url.'sso.php?skey='.$sso_key;
            header("location: ${sso_URL}");
            die();              
        }
        else{
            //Sinon
            switch($role){
                case 1:
                    /*
                    $functions = $client->__getFunctions ();
                    var_dump ($functions);*/

                    //Si Admin
                    $societe=$theUser->getSociete();

                    //On créé un projet qui porte le nom de sa société
                    $param=array('name'=> $societe,'customer'=> $societe,'in_late_tasks_notification'=> false,'reference'=>$societe,'recovery'=>1,'start_date'=>$date,'dead_line'=>null,'virtual'=>false,'entity_id'=>null,'project_management'=>false,'project_issues'=>"",'doc_to_produce'=>"");
                    $client->__call("addProject",$param);

                    //On créé un utilisateur qui sera admin du projet
                    $client->__call("addUser", array('login' => $login, 'pass' => $password, 'last_name' => $nom, 'first_name' => $prenom, 'email' => $email, 'lang' => "fr", 'active' => true, 'start_date' => $date, 'end_date' => null, 'profile_id' => 1, 'package_id' => 5));
                    
                    //On récupère l'ID du client
                    $user=($client->__call("getUserInfosByLogin", array('login' => $login)));
                    $userId=$user->id_membre;

                    //On récupère l'ID du projet
                    $project=$client->__call("getProjectList", array('get_custom_fields' => false,'name_search' => $societe, 'customer_search'=>$societe, 'only_user_projects'=>false));
                    $projectId=$project[0]->id_projet;
                    
                    //On associe l'utilisateur au projet
                    $client->__call("associateUserProject", array('uid'=>$userId, 'project_id'=>$projectId, 'profile_id'=>3));

                    //On connecte l'utilisateur
                    $user = ($client->__call("getUserInfosByLogin",array('login' => $login)));
                    $sso_key = $client->__call("createSSOSecurityKey",array('uid' => $user->id_membre));
                    $sso_URL = $ecmg_url.'sso.php?skey='.$sso_key;
                    header("location: ${sso_URL}");
                    die();

                    break;
                case 2:
                    //Si Utilisateur
                    $societe=$theUser->getIdDiriger()->getSociete();

                    $client->__call("addUser", array('login' => $login, 'pass' => $password, 'last_name' => $nom, 'first_name' => $prenom, 'email' => $email, 'lang' => "fr", 'active' => true, 'start_date' => $date, 'end_date' => null, 'profile_id' => 3, 'package_id' => 5));

                    $user=($client->__call("getUserInfosByLogin", array('login' => $login)));
                    $userId=$user->id_membre;

                    $project=$client->__call("getProjectList", array('get_custom_fields' => false,'name_search' => $societe, 'customer_search'=>$societe, 'only_user_projects'=>false));
                    $projectId=$project[0]->id_projet;

                    $client->__call("associateUserProject", array('uid'=>$userId, 'project_id'=>$projectId, 'profile_id'=>6));

                    $user = ($client->__call("getUserInfosByLogin",array('login' => $login)));
                    $sso_key = $client->__call("createSSOSecurityKey",array('uid' => $user->id_membre));
                    $sso_URL = $ecmg_url.'sso.php?skey='.$sso_key;          
                    header("location: ${sso_URL}");
                    die();     

                    break;
                default:;
            }
        }
    }
}
