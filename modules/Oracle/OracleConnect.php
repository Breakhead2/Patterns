<?php

namespace db\modules\Oracle;

use db\interfaces\ConnectInterface;

class OracleConnect implements ConnectInterface
{
    public function link()
    {
        echo "Соединение с базой данной Oracle";
    }
}