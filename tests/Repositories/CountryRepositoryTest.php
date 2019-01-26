<?php

use Hoda\Repositories\CountryRepository;
use PHPUnit\Framework\TestCase;

class CountryRepositoryTest extends TestCase
{
    private $countryRepoObj;

    /**
     * SetUp the test environment.
     */
    protected function setUp()
    {
        $this->countryRepoObj = new CountryRepository();
    }

    /**
     * TearDown the test environment.
     */
    protected function tearDown()
    {
        $this->countryRepoObj = null;
    }

    /**
     * Test instance of $this->countryRepoObj.
     *
     * @test
     */
    public function testInstanceOf()
    {
        $this->assertInstanceOf(CountryRepository::class, $this->countryRepoObj);
    }

    public function testGetLangByCountry()
    {
        $lang = $this->countryRepoObj->getLangByCountry('spain');
        $this->assertEquals('es', $lang);
    }

    /**
     * test.
     */
    public function testCountCountriesByLang()
    {
        $country = $this->countryRepoObj->getCountriesByLang('es');
        $this->assertCount(3, $country);
    }




//    public function testGetCountriesByLang(){
//        $countries= $this->countryRepoObj->getCountriesByLang('es');
//        $this->assertCount(3,$countries);
//        $this->assertArraySubset(['Argentina','Bolivia','Chile'],$countries);
//
//    }
}
