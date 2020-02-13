<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Societe;


class TSAController extends AbstractController
{
    /**
     * @Route("/tsa", name="tsa")
     */
    public function index()
    {
        $theUser=$this->getUser();

        if($theUser->getRole()==1){
            $repository=$this->getDoctrine()->getRepository(Societe::class);
            $idParamSociete=$theUser->getIdSociete();
            $paramSociete=$repository->find($idParamSociete);
        }
        elseif($theUser->getRole()==2){
            $admin=$theUser->getIdDiriger();

            $repository=$this->getDoctrine()->getRepository(Societe::class);
            $idParamSociete=$admin->getIdSociete();
            $paramSociete=$repository->find($idParamSociete);
        }

        $loginSA=$paramSociete->getLoginsuperadmin();
        $mdpSA=$paramSociete->getMdpsuperadmin();

        $url = 'https://tsacademy.elmg.net/';
        $soapParameters = Array('login' => $loginSA, 'password'=> $mdpSA) ;

        $client = new \SoapClient($url.'ws.php?wsdl', $soapParameters);

        $user = ($client->__call("getUserInfosByLogin",array('login' => $loginSA)));

        // si l'utilisateur existe
        if($user)
        {
            $sso_key = $client->__call("createSSOSecurityKey",array('uid' => $user->user_id));
            $sso_URL = $url.'sso.php?skey='.$sso_key;
            
            header("location: ${sso_URL}");
            die();
        }

        return $this->render('tsa/index.html.twig', ['loginSA'=>$loginSA]);
    }
}
