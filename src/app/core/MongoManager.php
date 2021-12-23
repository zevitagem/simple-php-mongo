<?php

namespace CheckoutFees\Core;

class MongoManager
{
    private static $connection = null;

    public static function connect()
    {
        if (!empty(self::$connection)) {
            return self::getConnection();
        }

        try {
            self::$connection = new \MongoDB\Driver\Manager('mongodb://root:example@mongo-fees-checkout:27017');
        } catch (\Throwable $e) {
            die($e->getMessage());
        }
    }

    public static function getConnection(){
        return self::$connection;
    }
}