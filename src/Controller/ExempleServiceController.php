<?php

namespace App\Controller;

use App\Services\IRail;
use App\Services\Bonjour;
use Psr\Log\LoggerInterface;
use App\Services\ChuckLogger;
use App\Services\ChuckNorris;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExempleServiceController extends AbstractController
{
    /**
     * @Route("/exemple/service/utilise/logger")
     */
    public function utiliseLogger(LoggerInterface $monLogger)
    {
        $monLogger->info("jai faim");

        return $this->render('exemple_service/utilise_logger.html.twig');
    }

    /**
     * @route("exemple/service/utilise/bonjour")
     */
    public function utiliseBonjour(Bonjour $objBonjour)
    {
        $msg = $objBonjour->direBonjour();
        return $this->render(
            'exemple_service/utilise_bonjour.html.twig',
            ['msg' => $msg]
        );
    }

    /**
     * @route("exemple/service/utilise/chuckNorris")
     */
    public function utiliseChuckNorris(ChuckNorris $objChuck)
    {
        $phrase = $objChuck->getPhrase();
        return $this->render(
            'exemple_service/utilise_ChuckNorris.html.twig',
            ['phrase' => $phrase]
        );
    }

    /**
     * @route("exemple/service/utilise/chuckLogger")
     */
    public function utiliseChuckLogger(ChuckLogger $objChuck)
    {
        $phrase = $objChuck->getPhrase();
        return $this->render(
            'exemple_service/utilise_ChuckLogger.html.twig',
            ['phrase' => $phrase]
        );
    }

    /**
     * @route("exemple/service/utilise/irail")
     */
    public function utiliseIRAil(IRail $irail)
    {
        $json = $irail->getInfoGare();
        // dump($json);
        // die();
        return $this->render(
            'exemple_service/utilise_irail.html.twig',
            ['phrase' => $json["station"]]
        );
    }
}
