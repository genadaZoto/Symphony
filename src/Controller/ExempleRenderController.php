<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExempleRenderController extends AbstractController
{
    /**
     * @Route("/exemple/render", name="exemple_render")
     */
    public function index()
    {
        return $this->render('exemple/render/index.html.twig');
    }

    /**
     * @route("/envoyer/ville")
     */
    public function envoyerVille()
    {
        $ville = "Bruxelles";
        return $this->render(
            "exemple_render/envoyer_ville.html.twig",
            ['paramVille' => $ville]
        );
    }
    /**
     * @route("/envoyer/array/ville")
     */

    public function envoyerArrayVille()
    {
        $villes = ['br', 'tr', 'lr'];
        return $this->render(
            'exemple_render/envoyer_array_ville.html.twig',
            ['villes' => $villes]
        );
    }
}
