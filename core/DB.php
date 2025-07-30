<?php
use Pixie\Connection;
use Pixie\QueryBuilder\QueryBuilderHandler;

class DB
{
    public static $queryCount = 0;
    public static $queries = [];
    protected static $qb;

    public static function init()
    {
        if (!self::$qb) {
            $config = require __DIR__ . '/../app/config/database.php';
            $connection = new Connection('mysql', $config);
            self::$qb = new QueryBuilderHandler($connection);
        }
    }

    protected static function logQuery($query, $bindings, $time)
    {
        self::$queryCount++;
        self::$queries[] = [
            'sql' => $query,
            'bindings' => $bindings,
            'time' => $time
        ];
    }

    public static function table($table)
    {
        self::init();
        return self::$qb->table($table);
    }
}
