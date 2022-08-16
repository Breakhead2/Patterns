<?php

namespace db\modules\MySQL;

use db\interfaces\ConnectInterface;

class MySQLConnect implements ConnectInterface
{
    public function link()
    {
        echo "Соединение с базой данной MySQL";
    }
}