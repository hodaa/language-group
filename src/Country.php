<?php
namespace Hoda;

use Hoda\Traits\DataFetch;

class  Country{

    use DataFetch;

    public function __construct()
    {
    }

    //list only three countries that use this language
    function getCountry($lang)
    {
        $url = URL::URL.'/lang/'.$lang;
        $data = $this->fetchData($url);

        $countries = array_slice($data,0,3);

        return $countries;
    }
}