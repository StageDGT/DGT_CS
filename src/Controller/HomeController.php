<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    //php -S localhost:8000 -t public

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->redirectToRoute('login');
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu()
    {
        $theUser=$this->getUser();
        if($theUser->getVerrouadmin()){
            if($theUser->getRole()==1){
                $this->addFlash('danger', 'Votre compte est verrouillé, veuillez contacter DGT Concept');
            }
            else{
                $this->addFlash('danger', 'Votre compte est verrouillé, veuillez contacter votre administrateur');
            }
            return $this->redirectToRoute('login');
        }
        else{
            return $this->render('home/menu.html.twig', ['theUser'=>$theUser]);
        }
    }
}
