<?php

use factories\{MySQLFactory, OracleFactory, PostgreSQLFactory};
use interfaces\DBFactoryInterface;

include "Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

class DB{

    public $connection;
    public $record;
    public $builder;

    public function __construct(DBFactoryInterface $db)
    {
        $this->connection = $db->getConnection();
        $this->record = $db->getRecord();
        $this->builder = $db->getQueryBuilder();
    }

}

$mySqlDB = new DB(new MySQLFactory());

$mySqlDB->connection->link();
$mySqlDB->record->save();
$mySqlDB->builder->select();
