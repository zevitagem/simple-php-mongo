<?php

namespace CheckoutFees\Core\Api;

use CheckoutFees\Core\MongoManager;

class Fees
{
    private $database;

    public function __construct()
    {
        $mongo          = new MongoManager();
        $mongo::connect();
        $this->database = $mongo::getConnection();
    }

    public function index()
    {
        var_dump($this->database);
    }

    public function add()
    {
        echo 'add';
    }
}