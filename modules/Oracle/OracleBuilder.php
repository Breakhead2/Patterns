<?php

namespace modules\Oracle;

use interfaces\BuilderInterface;

class OracleBuilder implements BuilderInterface
{
    public function select()
    {
        echo "Конструктор запросов с базой данной Oracle";
    }
}