<?php
use Pixie\Connection;

class DBConnection extends Connection
{
    public function logQuery($query, $bindings, $time)
    {
        DB::$queryCount++;
        DB::$queries[] = [
            'sql' => $query,
            'bindings' => $bindings,
            'time' => $time
        ];

        echo $query;
    }
}
