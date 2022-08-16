<?php

namespace db\modules\Oracle;

use db\interfaces\BuilderInterface;

class OracleBuilder implements BuilderInterface
{
    public function select()
    {
        echo "Конструктор запросов с базой данной Oracle";
    }
}