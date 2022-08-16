<?php

namespace db\modules\MySQL;

use db\interfaces\BuilderInterface;

class MySQLQueryBuilder implements BuilderInterface
{
    public function select()
    {
        echo "Конструктор запросов с базой данной MySQL";
    }
}