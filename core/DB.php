<?php
use Pixie\Connection;
use Pixie\QueryBuilder\QueryBuilderHandler;

class DB
{
    protected static $qb;

    public static function init()
    {
        if (!self::$qb) {
            $config = require __DIR__ . '/../app/config/database.php';
            $connection = new Connection('mysql', $config);
            self::$qb = new QueryBuilderHandler($connection);
        }
    }

    public static function table($table)
    {
        self::init();
        return self::$qb->table($table);
    }
}
