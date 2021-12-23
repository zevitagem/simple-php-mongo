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
            $user     = env('MONGO_INITDB_ROOT_USERNAME');
            $password = env('MONGO_INITDB_ROOT_PASSWORD');
            $host     = env('MONGO_INITDB_HOST');
            $port     = env('MONGO_INITDB_PORT');

            self::$connection = new \MongoDB\Client("mongodb://$user:$password@$host:$port");
        } catch (\Throwable $e) {
            die($e->getMessage());
        }
    }

    public static function getCollection(string $collection = 'fees', string $database = 'checkout')
    {
        if (empty($connection = self::getConnection())) {
            throw new \DomainException('A conexão com o mongo deve existir antes de tentar buscar uma Collection');
        }

        $database = self::getConnection()->{$database};

        return $database->{$collection};
    }

    public static function getConnection()
    {
        return self::$connection;
    }
}