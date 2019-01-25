<?php

use Hoda\Repositories\CountryRepository;
use Hoda\Services\CountryService;
use PHPUnit\Framework\TestCase;

class CountryServiceTest extends TestCase
{
    private $countryServiceObj;

    public function setUp()
    {
        $countryServiceObj = new CountryService(new CountryRepository());
        $this->countryServiceObj = $countryServiceObj;
    }

    public function testRespondOneCountry()
    {
        $response = $this->countryServiceObj->respondOneCountry('Spain');
        $similarCountries = $this->countryServiceObj->formatSimilarCountries('es');
        $expected = "Country language code: es \n Spain speaks same language with these countries: Uruguay, Bolivia, Argentina..";
        $this->assertEquals($expected, $response);
    }
}
