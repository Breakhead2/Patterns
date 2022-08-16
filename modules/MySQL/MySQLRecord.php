<?php

namespace modules\MySQL;

use interfaces\RecordInterface;

class MySQLRecord implements RecordInterface
{
    public function save()
    {
        echo "Запись таблицы в базе данной MySQL";
    }
}