<?php

namespace modules\MySQL;

use interfaces\ConnectInterface;

class MySQLConnect implements ConnectInterface
{
    public function link()
    {
        echo "Соединение с базой данной MySQL";
    }
}