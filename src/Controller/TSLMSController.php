<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TSLMSController extends AbstractController
{
    /**
     * @Route("/tslms", name="tslms")
     */
    public function index()
    {
        $theUser=$this->getUser();
        $login=$theUser->getLogin();
        $password=$theUser->getMdp();

        $elmg_url = 'https://dgtconcept.elmg.net/';
        $client = new \SoapClient($elmg_url.'ws.php?wsdl');
        $user = ($client->__call("getUserInfosByLogin",array('login' => $login)));

        // si l'utilisateur existe
        if($user)
        {
            // si le mot de passe est correct
            if($client->__call('isUserValidCredentials', ['login' => $login,'password' => $password]))
            {
                $sso_key = $client->__call("createSSOSecurityKey",array('uid' => $user->user_id));
                $sso_URL = $elmg_url.'sso.php?skey='.$sso_key;
                
                header("location: ${sso_URL}");
                die();
                
            }
            else {
            //    afficherErreur('login ou mot de passe incorrect');
            }
        } 
        else {
           // afficherErreur('login ou mot de passe incorrect');
        }

        return $this->render('tslms/index.html.twig', ['ssoUrl'=>$sso_URL]);
    }

    /*
    function connexion($client, $login, $password, $elmg_url)
    {
        $user = ($client->__call("getUserInfosByLogin",array('login' => $login)));

        // si l'utilisateur existe
        if($user)
        {
            // si le mot de passe est correct
            if($client->__call('isUserValidCredentials', ['login' => $login,'password' => $password]))
            {
                $sso_key = $client->__call("createSSOSecurityKey",array('uid' => $user->user_id));
                $sso_URL = $elmg_url.'sso.php?skey='.$sso_key;
                
                ssoConnexion($sso_URL);
                
            }
            else {
            //    afficherErreur('login ou mot de passe incorrect');
            }
        } 
        else {
           // afficherErreur('login ou mot de passe incorrect');
        }

    }

    function ssoConnexion($sso_URL)
    {            
        header("location: ${sso_URL}");
        die();
    }*/
}
