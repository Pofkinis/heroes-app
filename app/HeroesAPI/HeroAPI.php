<?php

namespace App\HeroesAPI;

use GuzzleHttp\Client;

class HeroAPI
{
    private $url;
    private $apiKey;
    private $limit = 30; //731 is maximum number of heroes in API

    public function __construct()
    {
        $this->url = env('HERO_URL');
        $this->apiKey = env('HERO_API_KEY');
    }

    public function getHeroes($method = 'GET')
    {
        $client = new Client();

        $heroes = collect();
        for ($i = 1; $i <= $this->limit; $i++) {
            $callUrl = $this->url . $this->apiKey . '/' . $i;

            $response = $client->request($method, $callUrl);

            $heroJson = json_decode($response->getBody()->getContents());

            $heroes->add($heroJson);
        }

        return $heroes;
    }
}
