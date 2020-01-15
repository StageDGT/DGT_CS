<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TSAController extends AbstractController
{
    /**
     * @Route("/t/s/a", name="t_s_a")
     */
    public function index()
    {
        return $this->render('tsa/index.html.twig');
    }
}
