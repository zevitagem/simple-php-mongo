<?php

require '../vendor/autoload.php';

$mongo = new \Core\CheckoutFees\MongoManager();
$mongo::connect();
$db = $mongo::getConnection();

var_dump($db);

