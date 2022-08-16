<?php

namespace db\modules\PostgreSQL;

use db\interfaces\ConnectInterface;

class PostgreSQLConnect implements ConnectInterface
{
    public function link()
    {
        echo "Соединение с базой данной PostgreSQL";
    }
}