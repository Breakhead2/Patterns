<?php

namespace modules\PostgreSQL;

use interfaces\BuilderInterface;

class PostgreSQLBuilder implements BuilderInterface
{
    public function select()
    {
        echo "Конструктор запросов с базой данной PostgreSQL";
    }
}