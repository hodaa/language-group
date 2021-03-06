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

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
        $this->countryServiceObj = null;
    }

    public function testRespondOneCountry()
    {
        $response = $this->countryServiceObj->respondOneCountry('Spain');
        $expected = "Country language code: es \nSpain speaks same language with these countries: Argentina,Bolivia,Chile...\n";
        $this->assertEquals($expected, $response);
    }

    /**
     * test for.
     */
    public function testFormatSimilarCountries()
    {
        $firstCountry = new stdClass();
        $firstCountry->name = 'Argentina';

        $secondCountry = new stdClass();
        $secondCountry->name = 'Bolivia';

        $thirdCountry = new stdClass();
        $thirdCountry->name = 'Chile';

        $countries = [$firstCountry, $secondCountry, $thirdCountry];

        $formatCountries = $this->countryServiceObj->formatSimilarCountries($countries);
        $this->assertEquals('Argentina,Bolivia,Chile...', $formatCountries);
    }

    public function testRespondTwoCountriesAreSame()
    {
        $response = $this->countryServiceObj->respondTwoCountries('Qatar', 'Egypt');
        $this->assertEquals("Qatar and Egypt speak the same language\n", $response);
    }

    public function testRespondTwoCountriesNotSame()
    {
        $response = $this->countryServiceObj->respondTwoCountries('Spain', 'Egypt');
        $this->assertEquals("Spain and Egypt do not speak the same language\n", $response);
    }
}
