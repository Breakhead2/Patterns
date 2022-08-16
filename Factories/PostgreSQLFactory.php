<?php

namespace db\Factories;

use db\interfaces\{DBFactoryInterface, ConnectInterface, RecordInterface, BuilderInterface};
use db\modules\PostgreSQL\{PostgreSQLConnect, PostgreSQLRecord, PostgreSQLBuilder};

class PostgreSQLFactory implements DBFactoryInterface
{

    public function getConnection(): ConnectInterface
    {
        return new PostgreSQLConnect();
    }

    public function getRecord(): RecordInterface
    {
        return new PostgreSQLRecord();
    }

    public function getQueryBuilder(): BuilderInterface
    {
        return new PostgreSQLBuilder();
    }
}