<?php

namespace  Hoda\Traits;

/**
 * Trait DataFetch.
 */
trait DataFetch
{
    /**
     * @param $url
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed
     */
    public function fetchData($url)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url, ['exceptions' => false]);

        return json_decode($response->getBody()->getContents());

    }
}
