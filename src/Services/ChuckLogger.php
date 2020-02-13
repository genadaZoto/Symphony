<?php

namespace App\Services;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\HttpClient;

class ChuckLogger{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function getPhrase(){
        $client = HttpClient::create();
        $response = $client->request ('GET', 'https://api.chucknorris.io/jokes/random');
        $content = $response->toArray();

        $this->logger->info("Appel au Service ChucyLogger ok!");
        return $content["value"];

    }
}