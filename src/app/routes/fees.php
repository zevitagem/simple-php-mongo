<?php

use CheckoutFees\Core\Api\Fees;
use CheckoutFees\Core\Libraries\Router;

$class  = new Fees();
$router = new Router($class);

$router->handle();
