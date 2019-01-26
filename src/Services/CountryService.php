<?php
/**
 * Created by PhpStorm.
 * User: hoda
 * Date: 24/01/19
 * Time: 12:05 م.
 */

namespace  Hoda\Services;

use Hoda\Contracts\RepositoryInterface;
use Hoda\Contracts\ServiceInterface;

class CountryService implements ServiceInterface
{
    private $countryRepo;

    /**
     * CountryService constructor.
     * @param RepositoryInterface $countryRepo
     */
    public function __construct(RepositoryInterface $countryRepo)
    {
        $this->countryRepo = $countryRepo;
    }


    /**
     * @param string $lang
     *
     * @return string
     */
    public function respondOneCountry(string $country): string
    {
        $lang = $this->countryRepo->getLangByCountry($country);
        $countries = $this->countryRepo->getCountriesByLang($lang);
        $similarCountries = $this->formatSimilarCountries($countries);

        $response=  "Country language code: $lang \n$country speaks same language with these countries: $similarCountries\n";
        return $response;
    }

    /**
     * @param string $lang
     *
     * @return string
     */
    public function formatSimilarCountries(array $countries): string
    {
        $similar_countries = '';
        foreach ($countries as $key => $country) {
            $countryName = $country->name;
            if (strpos($country->name, '(')) {
                $countryName = explode( '(',$countryName);
                $countryName= trim($countryName[0]);
            }
            if (2 !== $key) {
                $similar_countries .= $countryName.',';
            } else {
                $similar_countries .= $countryName.'...';
            }
        }

        return $similar_countries;
    }

    /**
     * @param string $firstCountry
     * @param string $secondCountry
     *
     * @return string
     */
    public function respondTwoCountries(string $firstCountry, string $secondCountry): string
    {
        $firstLang = $this->countryRepo->getLangByCountry($firstCountry);
        $secondLang = $this->countryRepo->getLangByCountry($secondCountry);

        if ($firstLang === $secondLang) {
            $response= "$firstCountry and $secondCountry speak the same language\n";
        } else {
            $response= "$firstCountry and $secondCountry do not speak the same language\n";
        }
        return $response;
    }
}
