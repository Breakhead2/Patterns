<?php

use db\interfaces\DBFactoryInterface;
use db\Factories\{MySQLFactory, OracleFactory, PostgreSQLFactory};


class DB{

    public $connection;
    protected $record;
    protected $builder;


    public function __construct(DBFactoryInterface $db)
    {
        $this->connection = $db->getConnection();
        $this->record = $db->getRecord();
        $this->builder = $db->getQueryBuilder();
    }

}

$db = new DB(new MySQLFactory());
