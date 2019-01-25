<?php

namespace Hoda;

use Hoda\Services\CountryService;

/**
 * Class OneCountry
 * @package Hoda
 */
class OneCountry
{
    private $countryService;

    /**
     * OneCountry constructor.
     * @param CountryService $countryService
     */
    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    /**
     * get response if input in one country
     * @param $country
     * @return string
     */
    public function respond($country) :string
    {
        return $this->countryService->respondOneCountry($country);
    }
}
