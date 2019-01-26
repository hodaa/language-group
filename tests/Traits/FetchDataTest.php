<?php
use PHPUnit\Framework\TestCase;
use Hoda\Traits\DataFetch;

class FetchDataTest extends TestCase{

    use DataFetch;

    public  function  testFetchData(){
        $response=$this->fetchData("https://restcountries.eu/rest/v2/name/Chile");
        $this->assertIsArray($response);

    }
}