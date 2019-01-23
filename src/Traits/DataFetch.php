<?php

namespace  Hoda\Traits;
/**
 * Trait DataFetch
 * @package Hoda\Traits
 */
trait DataFetch
{
    /**
     * @param $url
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function fetchData($url)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url, ['exceptions' => false]);

        return json_decode($response->getBody()->getContents());
    }
}
