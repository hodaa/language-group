<?php

namespace  Hoda\Repositories;

use Hoda\Contracts\RepositoryInterface;
use Hoda\CountriesApi;
use Hoda\Traits\DataFetch;

class CountryRepository implements RepositoryInterface
{
    use DataFetch;

    /**
     * get language of specific country.
     *
     * @param string $country
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return string
     */
    public function getLangByCountry(string $country): string
    {
        $url = CountriesApi::URL.'/name/'.$country.'?fullText=true&fields=languages';

        $data = $this->fetchData($url);

        if(isset($data->status)&& $data->status==404) {
            throw new \InvalidArgumentException("The Country $country is not valid." );
        }

        return $data[0]->languages[0]->iso639_1;
    }

    /**
     * @param string $lang
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return string
     */
    public function getCountriesByLang(string $lang): array
    {
        $url = CountriesApi::URL.'/lang/'.$lang;


        $countries= $this->fetchData($url);

        $similarCountries=[];
        foreach ($countries as $country){
            if(count($similarCountries)===3){
                return $similarCountries;
            }
            if($country->languages[0]->iso639_1==$lang){
                $similarCountries[]=$country;
            }
        }
        return $similarCountries;
    }
}
