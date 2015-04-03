<?php
require_once "vendor/autoload.php";
$configuration = new Bolt\Configuration\Composer(__DIR__);
$configuration->getVerifier()->disableApacheChecks();
$configuration->verify();
$app = new Bolt\Application(array('resources'=>$configuration));
$app->initialize();
$app->run();
