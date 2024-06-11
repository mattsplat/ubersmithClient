<?php

use UbersmithClient\ApiHandler;

require __DIR__ . '/vendor/autoload.php';

$handler = new ApiHandler();

$uber = ApiHandler::uber();
$uber->attachment_get();