<?php

require 'vendor/autoload.php';

use Hoda\Country;
use Hoda\Language;

if (defined('STDIN')) {
    if (isset($argv[1])) {
        $country = $argv[1];


        $countryObj = new Country();
        $languageObj = new Language();

        $language = $languageObj->getLanguage($country);

        if (isset($argv[2])) {
            //compare two countries
            $language2 = $languageObj->getLanguage($argv[2]);
            if ($language !== $language2) {
                echo "$country and $argv[2] do not speak the same language";
                echo "\n";
            } else {
                echo "$country and $argv[2] speak the same language";
                echo "\n";
            }
        } else {
            $countries = $countryObj->getCountry($language);
            $similar_countries = '';
            foreach ($countries as $key => $similar_country) {
                if (2 !== $key) {
                    $similar_countries .= $similar_country->name.',';
                } else {
                    $similar_countries .= $similar_country->name.'...';
                }
            }
            echo "Country language code: $language";
            echo "\n";
            echo "$country speaks same language with these countries:".$similar_countries;
            echo "\n";
        }
    } else {
        echo "Please enter Company\n";
    }
}

//print("Country language code: ".$data[0]->languages[0]->iso639_1);
