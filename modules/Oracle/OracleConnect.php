<?php

namespace modules\Oracle;

use interfaces\ConnectInterface;

class OracleConnect implements ConnectInterface
{
    public function link()
    {
        echo "Соединение с базой данной Oracle";
    }
}