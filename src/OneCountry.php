<?php

namespace Hoda;

use Hoda\Services\CountryService;

class OneCountry
{
    private $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }
    public function respond($country){
       return $this->countryService->respondOneCountry($country);
    }
}
