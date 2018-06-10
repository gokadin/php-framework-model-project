<?php

require __DIR__.'/vendor/autoload.php';

use Library\DataMapper\Console\Modules\CreateSchema;
use Library\DataMapper\Console\Modules\DropSchema;
use Library\DataMapper\Console\Modules\SeedDatabase;
use Library\DataMapper\Console\Modules\UpdateSchema;
use Symfony\Component\Console\Application;

$app = new Application();

$env = new \Library\Core\Environment(__DIR__);
$env->load();

$config = require __DIR__.'/Config/FeaturesConfig/datamapper.php';
$app->add(new CreateSchema($config));
$app->add(new DropSchema($config));
$app->add(new UpdateSchema($config));
$app->add(new SeedDatabase($config));

$app->run();
