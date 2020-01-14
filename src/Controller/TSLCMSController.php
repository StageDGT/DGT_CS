<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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

        $soapParameters = Array('login' => "nicolas.choffat", 'password' => "motdepasse") ;
        $ecmg_url = 'https://dgtconcept.e-learning-suite.com/';
        $client = new \SoapClient($ecmg_url.'ws.php?wsdl', $soapParameters);
        

        // on verifie si l'utilisateur existe deja ou non via son adresse email
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
                case 0:
                    //Si Super Admin

                    $user = ($client->__call("getUserInfosByLogin",array('login' => $login)));
                    $sso_key = $client->__call("createSSOSecurityKey",array('uid' => $user->id_membre));
                    $sso_URL = $ecmg_url.'sso.php?skey='.$sso_key;
                    header("location: ${sso_URL}");
                    die();             

                    break;
                case 1:
                    /*
                    $functions = $client->__getFunctions ();
                    var_dump ($functions);*/

                    //Si Admin
                    $societe=$theUser->getSociete();

                    $param=array('name'=> $societe,'customer'=> $societe,'in_late_tasks_notification'=> false,'reference'=>$societe,'recovery'=>1,'start_date'=>$date,'dead_line'=>null,'virtual'=>false,'entity_id'=>null,'project_management'=>false,'project_issues'=>"",'doc_to_produce'=>"");
                    $client->__call("addProject",$param);

                    $client->__call("addUser", array('login' => $login, 'pass' => $password, 'last_name' => $nom, 'first_name' => $prenom, 'email' => $email, 'lang' => "fr", 'active' => true, 'start_date' => $date, 'end_date' => null, 'profile_id' => 1, 'package_id' => 5));
                    
                    $user=($client->__call("getUserInfosByLogin", array('login' => $login)));
                    $userId=$user->id_membre;

                    $projectId=$client->__call("getProjectList", array('get_custom_fields' => false,'name_search' => $societe, 'customer_search'=>$societe, 'only_user_projects'=>false));

                    $client->__call("associateUserProject", array('uid'=>$userId, 'project_id'=>$projectId, 'profile_id'=>3));

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

                    $projectId=$client->__call("getProjectList", array('get_custom_fields' => false,'name_search' => $societe, 'customer_search'=>$societe, 'only_user_projects'=>false));

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