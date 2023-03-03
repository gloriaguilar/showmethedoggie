<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

class ApiService
{
    private $client;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function getApiData($url)
    {
        $response = $this->client->request('GET', $url);
        return $response->toArray();
    }
}

?>