<?php

use Hoda\IoC;
use Hoda\Router;
use Hoda\OneCountry;
use Hoda\TwoCountries;
use Hoda\Repositories\CountryRepository;
use Hoda\Services\CountryService;

IoC::register('router', function () {
    $router = new Router(new OneCountry(new CountryService(new CountryRepository())),
        new TwoCountries(new CountryService(new CountryRepository())));

    return $router;
});
