<?php

namespace App\Controller;

use DateTime;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SessionController extends AbstractController
{
    /**
     * @Route("/session/creer/variable/session")
     */
   public function creerVariableSession(SessionInterface $objSession){
        $objSession->set('nom', 'Lucy');
        return $this->render('session/creer_variable.html.twig');
   }

   /**
     * @Route("/session/afficher/variable/session")
     */
   public function afficherVariableSession(SessionInterface $objSession){
    $nom = $objSession->get('nom');
    return $this->render('session/afficher_variable.html.twig',
        ['nom'=>$nom]);
   }

   /**
     * @Route("/session/creer/variable/objet")
     */
    public function creerVariableObjet(SessionInterface $objSession){
        $objDate= new DateTime();
        $objSession->set('uneDate',$objDate);
        return $this->render('session/creer_variable_objet.html.twig');
       }

    /**
     * @Route("/session/afficher/variable/objet")
     */
    public function afficherVariableObjet(SessionInterface $objSession){
       
        $objDate = $objSession->get('uneDate');
        return $this->render('session/afficher_variable_objet.html.twig',
        ['uneDate'=>$objDate]);
       }
}
