<?php

namespace db\Factories;

use db\interfaces\{DBFactoryInterface, ConnectInterface, RecordInterface, BuilderInterface};
use db\modules\MySQL\{MySQLConnect, MySQLRecord, MySQLQueryBuilder};

class MySQLFactory implements DBFactoryInterface
{

    public function getConnection(): ConnectInterface
    {
        return new MySQLConnect();
    }

    public function getRecord(): RecordInterface
    {
        return new MySQLRecord();
    }

    public function getQueryBuilder(): BuilderInterface
    {
        return new MySQLQueryBuilder();
    }
}