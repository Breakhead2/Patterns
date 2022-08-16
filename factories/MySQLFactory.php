<?php

namespace factories;

use interfaces\{DBFactoryInterface, ConnectInterface, RecordInterface, BuilderInterface};
use modules\MySQL\{MySQLConnect, MySQLRecord, MySQLQueryBuilder};

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