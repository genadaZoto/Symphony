<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExemplesRoutingController extends AbstractController
{
    /**
     * @Route("/afficher/message/acceuil")
     */
    public function afficherMessageAcceuil()
    {
        return new Response("Hello world !");
    }

    /**
     * @Route("/affichermessage/english")
     */
    public function sayHello()
    {
        return new Response("Today is " . date("Y/m/d") . ", I day of Symfony");
    }

    /**
     * @Route ("/afficher/bonjour/perso/{nom}/{prenom}")
     */
    public function afficherBonjourPerso(Request $req){
        return new Response("Bonjour " .$req->get('nom'). ", " . $req->get('prenom'));
    }

    /**
     * @Route("/afficher/tva/{prix}")
     */
    public function afficherTva(Request $req){

        return new Response($req->get('prix') * 0.21);
    }

    /**
     * @route("afficher/moyenne/{val1}/{val2}/{val3}")
     */
    public function afficherMoyenne(Request $req){
        return new Response(($req->get('val1') + $req->get('val2') + $req->get('val3')) / 3);
    }

    /**
     * @route("/exemple/redirect/imdb/{titre}")
     */
    public function exempleRedirectImdb(Request $req){
        $url = "http://www.imdb.com/find?ref_=nv_sr_fn&q=".$req->get('titre');
        return $this->redirect($url);

    }
}
