<?php
$paths = explode('/', $_SERVER['REQUEST_URI']);
end($paths);
$route = trim(current($paths));

$pos = strpos($route, '?');
if ($pos !== false) {
    $route = substr($route, 0, $pos);
}

if (empty($route)) {
    $route = 'fees';
}


require '../vendor/autoload.php';
require '../routes/'.$route.'.php';

