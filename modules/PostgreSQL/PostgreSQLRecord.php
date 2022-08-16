<?php

namespace db\modules\PostgreSQL;

use db\interfaces\RecordInterface;

class PostgreSQLRecord implements RecordInterface
{
    public function save()
    {
        echo "Запись таблицы в базе данной PostgreSQL";
    }
}