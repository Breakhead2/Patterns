<?php

namespace modules\MySQL;

use interfaces\BuilderInterface;

class MySQLQueryBuilder implements BuilderInterface
{
    public function select()
    {
        echo "Конструктор запросов с базой данной MySQL";
    }
}