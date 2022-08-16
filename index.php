<?php

use factories\MySQLFactory;
use interfaces\DBFactoryInterface;

include "Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

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
