<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmbedControllerVueController extends AbstractController
{
    /**
     * @Route("/embed/controller/vue/affiche/vue1")
     */
    public function afficheVue1()
    {
        return $this->render("embed_controller_vue/affiche_vue1.html.twig");
    }
    /**
     * @Route("/embed/controller/vue/affiche/vue1")
     */
    public function afficheVue2()
    {
        return $this->render("embed_controller_vue/affiche_vue2.html.twig");
    }

    public function donneesDynamique(){
        $villes=['Paris', "Bruxelles", 'tirana', 'berlin', 'tokyo'];
        return $this->render("embed_controller_vue/donnees_dynamique.html.twig",
        ['villes'=>$villes]);
    }

    public function donneesDynamique2($nombreVilles){
        $villes=['Paris', "Bruxelles", 'tirana', 'berlin', 'tokyo'];
        $villes = array_slice($villes, 0, $nombreVilles);

        return $this->render("embed_controller_vue/donnees_dynamique2.html.twig",
        ['villes'=>$villes]);
    }
}
