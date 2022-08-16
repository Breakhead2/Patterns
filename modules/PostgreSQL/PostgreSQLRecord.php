<?php

namespace modules\PostgreSQL;

use interfaces\RecordInterface;

class PostgreSQLRecord implements RecordInterface
{
    public function save()
    {
        echo "Запись таблицы в базе данной PostgreSQL";
    }
}