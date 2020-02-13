<?php

namespace App\Services;

use Symfony\Component\HttpClient\HttpClient;

class ChuckNorris{
    public function getPhrase(){
        $client = HttpClient::create();
        $response = $client->request ('GET', 'https://api.chucknorris.io/jokes/random');
        $content = $response->toArray();
        return $content["value"];

    }
}