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
     * @return string
     */
    public function respond($firstCountry,$secondCountry):string
    {
        return  $this->countryService->respondTwoCountries($firstCountry,$secondCountry);
    }
}