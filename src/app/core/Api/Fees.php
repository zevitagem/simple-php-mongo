<?php

namespace CheckoutFees\Core\Api;

use CheckoutFees\Core\MongoManager;

class Fees
{
    private $database;

    public function __construct()
    {
        $this->database = new MongoManager();
        $this->database::connect();
    }

    public function index()
    {
        echo 'index';
    }

    public function add()
    {
        $collection = $this->database::getCollection();

        $result = $collection->insertOne(['name' => 'Hinterland', 'brewery' => 'BrewDog']);

        echo "Inserted with Object ID '{$result->getInsertedId()}'";
    }
}