<?php

namespace db\modules\PostgreSQL;

use db\interfaces\BuilderInterface;

class PostgreSQLBuilder implements BuilderInterface
{
    public function select()
    {
        echo "Конструктор запросов с базой данной PostgreSQL";
    }
}