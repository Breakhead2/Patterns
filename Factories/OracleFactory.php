<?php

namespace db\Factories;

use db\interfaces\{DBFactoryInterface, ConnectInterface, RecordInterface, BuilderInterface};
use db\modules\Oracle\{OracleConnect, OracleRecord, OracleBuilder};

class OracleFactory implements DBFactoryInterface
{

    public function getConnection(): ConnectInterface
    {
        return new OracleConnect();
    }

    public function getRecord(): RecordInterface
    {
        return new OracleRecord();
    }

    public function getQueryBuilder(): BuilderInterface
    {
        return new OracleBuilder();
    }
}
