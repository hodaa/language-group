<?php

require_once __DIR__.'/vendor/autoload.php';

use Hoda\Repositories\CountryRepository;
use Hoda\Router;
use Hoda\Services\CountryService;

$response = new Router(new CountryService(new CountryRepository()));

return $response->route($argv);
