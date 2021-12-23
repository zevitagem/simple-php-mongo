<?php

namespace CheckoutFees\Core\Api;

use CheckoutFees\Core\MongoManager;

class Fees
{
    private $database;

    public function __construct()
    {
        $this->database          = new MongoManager();
        $this->database::connect();
    }

    public function index()
    {
        //dd($this->database->getConnection()->listDatabases());

        $collection = $this->database::getCollection();

        $result = $collection->insertOne(['name' => 'Hinterland', 'brewery' => 'BrewDog']);

        echo "Inserted with Object ID '{$result->getInsertedId()}'";
    }

    public function add()
    {
        echo 'add';
    }
}