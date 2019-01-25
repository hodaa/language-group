<?php

use Hoda\IoC;

require_once __DIR__.'/vendor/autoload.php';

require_once __DIR__.'/bootstrap.php';

// Fetch new router instance with dependencies set

$router = IoC::resolve('router');

print ($router->route($argv));
