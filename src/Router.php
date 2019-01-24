<?php

namespace  Hoda;


/**
 * Class Response.
 */
class Router
{
    private $oneCountry;
    private $twoCountries;

    public function __construct(OneCountry $oneCountry,TwoCountries $twoCountries)
    {
        $this->oneCountry = $oneCountry;
        $this->twoCountries = $twoCountries;
    }

    public function route(array $data)
    {
        if (isset($data[1]) && ! isset($data[2])) {
            return $this->oneCountry->respond($data[1]);
        } elseif (isset($data[1]) && isset($data[2])) {
            return $this->twoCountries->respond($data[1], $data[2]);
        } else {
            throw  new \Exception('You Should Enter Country');
        }
    }
}
