<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\WebProfilerBundle;

class HomeController extends AbstractController
{
    //php -S localhost:8000 -t public

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu()
    {
        return $this->render('home/menu.html.twig');
    }
}
