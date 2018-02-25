<?php

require __DIR__.'/../vendor/autoload.php';

$app = new \Library\Core\Application(realpath(__DIR__.'/../'));

$app->processRoute();

$app->sendResponse();