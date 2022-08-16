<?php

namespace db\interfaces;

interface DBFactoryInterface
{
    public function getConnection(): ConnectInterface;
    public function getRecord(): RecordInterface;
    public function getQueryBuilder(): BuilderInterface;
}