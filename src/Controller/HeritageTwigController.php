<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HeritageTwigController extends AbstractController
{
    /**
     * @Route("/heritage/twig", name="heritage_twig")
     */
    public function index()
    {
        return $this->render('heritage_twig/index.html.twig', [
            'controller_name' => 'HeritageTwigController',
        ]);
    }

    /**
     * @Route("/heritage/jsFunction")
     */
    public function jsFunction(){
        return $this->render('heritage_twig/jsFunction.html.twig');
    }
}
