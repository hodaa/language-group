<?php

use Hoda\Repositories\CountryRepository;
use PHPUnit\Framework\TestCase;

class CountryRepositoryTest extends TestCase
{
    private $countryRepoObj;

    protected function setUp()
    {
        $this->countryRepoObj = new CountryRepository();
    }

    public function testGetLangByCountry()
    {
        $lang = $this->countryRepoObj->getLangByCountry('spain');
        $this->assertEquals('es', $lang);
    }

    /**
     * test
     */
    public function testCountCountriesByLang(){
       $country= $this->countryRepoObj->getCountriesByLang('es');
       $this->assertCount(3,$country);

    }


//    public function testGetCountriesByLang(){
//        $countries= $this->countryRepoObj->getCountriesByLang('es');
//        $this->assertCount(3,$countries);
//        $this->assertArraySubset(['Argentina','Bolivia','Chile'],$countries);
//
//    }

}
