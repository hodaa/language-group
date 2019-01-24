<?php

namespace  Hoda\Contracts;

/**
 * Interface RepositoryInterface.
 */
interface RepositoryInterface
{
    public function getLangByCountry(string $country);

    public function getCountriesByLang(string $lang);
}
