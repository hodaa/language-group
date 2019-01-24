<?php

namespace  Hoda;

use Hoda\Contracts\AbstractFactory;


/**
 * Class LanguageGroupFactory
 * @package Hoda
 */
class LanguageGroupFactory
{
    public function createLanguage(): Language
    {
        return new Language();
    }

    public function createCountry(): Country
    {
        return new Country();
    }
}
