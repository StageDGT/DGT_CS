<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelpController extends AbstractController
{
    /**
     * @Route("/help", name="help")
     */
    public function index(\Swift_Mailer $mailer)
    {
        $theUser=$this->getUser();

        if(isset($_POST['btnEnvoyer'])){

            $produit=$_POST['radio'];
            $message=$_POST['TextAreaDescription'];
            $file=$_POST['PJ'];

            $to="support@dgt-concept.com";
            $subject="DGT CS - Demande d'assistance de ".$theUser->getNom()." ".$theUser->getPrenom();
            $headers = "De : ".$theUser->getMail()."\r\n"."Telephone : ".$theUser->getTelephone()."\r\n"."Produit concerné : ".$produit."\r\n";

            if($file!=null){
                $message = (new \Swift_Message($subject))
                ->setFrom($theUser->getMail())
                ->setTo('oceane.laporte1@gmail.com')
                ->setBody(
                    $headers." ".$message
                )
                ->attach(\Swift_Attachment::fromPath($file), "application/octet-stream");
            }
            else{
                $message = (new \Swift_Message($subject))
                ->setFrom($theUser->getMail())
                ->setTo('oceane.laporte1@gmail.com')
                ->setBody(
                    $headers." ".$message
                );
            }
    
            $mailer->send($message);
        }

        return $this->render('help/index.html.twig');
    }
}
