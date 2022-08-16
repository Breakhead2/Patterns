<?php

namespace modules\PostgreSQL;

use interfaces\ConnectInterface;

class PostgreSQLConnect implements ConnectInterface
{
    public function link()
    {
        echo "Соединение с базой данной PostgreSQL";
    }
}