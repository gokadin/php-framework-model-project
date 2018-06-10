<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Library\Engine\Console\Modules\SynchronizeSchema;

$app = new Application();

$env = new \Library\Core\Environment(__DIR__);
$env->load();

$app->add(new SynchronizeSchema(__DIR__));

$app->run();
