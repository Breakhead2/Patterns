<?php

namespace db\modules\MySQL;

use db\interfaces\RecordInterface;

class MySQLRecord implements RecordInterface
{
    public function save()
    {
        echo "Запись таблицы в базе данной MySQL";
    }
}