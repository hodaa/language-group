<?php

namespace Hoda;

use Hoda\Traits\DataFetch;

class Language
{
    use DataFetch;

    public function __construct()
    {
    }

    public function getLanguage($country)
    {
        $url = URL::URL.'/name/'.$country;
        $data = $this->fetchData($url);

        if(isset($data->status)&& $data->status==404){
            throw new \Exception('This Country not exists.');
        }else{
            $language = $data[0]->languages[0]->iso639_1;
        }


        return $language;
    }

    public function checkSimilar($first_country, $second_country)
    {
        $first_language = $this->getLanguage($first_country);
        $second_language = $this->getLanguage($second_country);

        if ($first_language !== $second_language) {
            echo "$first_country and $second_country do not speak the same language";
            echo "\n";
        } else {
            echo "$first_country and $second_country  speak the same language";
            echo "\n";
        }
    }
}
