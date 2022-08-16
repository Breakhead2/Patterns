<?php

namespace db\modules\Oracle;

use db\interfaces\RecordInterface;

class OracleRecord implements RecordInterface
{
    public function save()
    {
        echo "Запись таблицы в базе данной Oracle";
    }
}