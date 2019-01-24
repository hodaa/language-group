<?php

use Hoda\IoC;
use Hoda\Repositories\CountryRepository;
use Hoda\Services\CountryService;

IoC::register('router', function () {
    $router = new \Hoda\Router(new CountryService(new CountryRepository()));

    return $router;
});
