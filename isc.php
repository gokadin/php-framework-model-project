<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Library\IscClient\Console\Modules\IscClientRunner;

$app = new Application();

$env = new \Library\Core\Environment(__DIR__);
$env->load();

$app->add(new IscClientRunner(__DIR__));

$app->run();
