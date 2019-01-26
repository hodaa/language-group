<?php

namespace  Hoda;

use http\Exception\InvalidArgumentException;

/**
 * Class Response.
 */
class Router
{
    private $oneCountry;
    private $twoCountries;

    /**
     * Router constructor.
     * @param OneCountry $oneCountry
     * @param TwoCountries $twoCountries
     */
    public function __construct(OneCountry $oneCountry, TwoCountries $twoCountries)
    {
        $this->oneCountry = $oneCountry;
        $this->twoCountries = $twoCountries;
    }

    /**
     * @param array $data
     * @return string
     * @throws \Exception
     */
    public function route(array $data):string
    {
        if (isset($data[1]) && ! isset($data[2])) {
            return $this->oneCountry->respond($data[1]);
        } elseif (isset($data[1]) && isset($data[2])) {
            return $this->twoCountries->respond($data[1], $data[2]);
        } else {
            throw  new \InvalidArgumentException('You Should Enter Country');
        }
    }
}
