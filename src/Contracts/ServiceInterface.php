<?php
/**
 * Created by PhpStorm.
 * User: hoda
 * Date: 24/01/19
 * Time: 12:36 م.
 */

namespace  Hoda\Contracts;

interface ServiceInterface
{
    public function respondOneCountry(string $country);

    public function respondTwoCountries(string $firstCountry,string $secondCountry);
}
