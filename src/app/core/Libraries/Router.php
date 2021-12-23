<?php

namespace CheckoutFees\Core\Libraries;

class Router
{
    private $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function handle()
    {
        $action = $_GET['action'] ?? '';

        if (empty($action)) {
            return $this->controller->index();
        }

        if (!method_exists($this->controller, $action)) {
            throw new \InvalidArgumentException('Please, create a method to resolve request in controller class based on "action" parameter');
        }

        $this->controller->{$action}();
    }
}