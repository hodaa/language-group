<?php
namespace  Hoda;

use Hoda\Services\CountryService;

/**
 * Class TwoCountries
 * @package Hoda
 */
class TwoCountries{

    /**
     * TwoCountries constructor.
     * @param CountryService $countryService
     */
    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    /**
     * @param $firstCountry
     * @param $secondCountry
     */
    public function respond($firstCountry,$secondCountry)
    {
        $this->countryService->respondTwoCountries($firstCountry,$secondCountry);
    }
}