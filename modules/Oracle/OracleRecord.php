<?php

namespace modules\Oracle;

use interfaces\RecordInterface;

class OracleRecord implements RecordInterface
{
    public function save()
    {
        echo "Запись таблицы в базе данной Oracle";
    }
}