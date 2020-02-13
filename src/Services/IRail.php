<?php

namespace App\Services;
use Symfony\Component\HttpClient\HttpClient;

class IRail{
    public function getInfoGare(){
        $client = HttpClient::create();
        $response = $client->request("GET", "http://api.irail.be:80/liveboard/?id=BE.NMBS.008812005&lang=fr&format=json");

        // $json = $response->getContent();

        return ($response->toArray());
    }
    
}