<?php

namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class UtilisationApiController extends AbstractController
{
    /**
     * @Route("/utilisation/api/page1")
     */
    public function page1()
    {
       return $this->render("utilisation_api/page1.html.twig");
    }

    /**
     * @Route("/utilisation/api/page2")
     */
    public function page2()
    {
       return $this->render("utilisation_api/page2.html.twig");
    }

    public function apiNorris(){

        $client = HttpClient::create();
        $response = $client->request ('GET', 'https://api.chucknorris.io/jokes/random');
        $content = $response->toArray();

        // dump($content["value"]);
        // die();

        return $this->render("utilisation_api/api_norris.html.twig",
        ['contents'=>$content["value"]]);

    }
}
