<?php

namespace  Hoda;

use Hoda\Contracts\ServiceInterface;

/**
 * Class Response.
 */
class Router
{
    private $countryService;

    public function __construct(ServiceInterface $countryService)
    {
        $this->countryService = $countryService;
    }

    public function route(array $data)
    {
        if (isset($data[1]) && ! isset($data[2])) {
            return $this->countryService->respondOneCountry($data[1]);
        } elseif (isset($data[1]) && isset($data[2])) {
            return $this->countryService->respondTwoCountries($data[1], $data[2]);
        } else {
            throw  new \Exception('You Should Enter Country');
        }
    }



}
