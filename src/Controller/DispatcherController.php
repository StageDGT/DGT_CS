<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DispatcherController extends AbstractController
{
    /**
     * @Route("/dispatcher", name="dispatcher")
     */
    public function index()
    {
        return $this->render('dispatcher/index.html.twig', [
            'controller_name' => 'DispatcherController',
        ]);
    }
}
