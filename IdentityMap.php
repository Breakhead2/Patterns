<?php

namespace Model\Repository;

class IdentityMap
{
    private $identityMap = [];

    public function add(IDomainObject $obj, string $className)
    {
        $this->identityMap[$className] = $obj;
    }

    public function get(string $classname)
    {
        if (isset($this->identityMap[$classname])) {
            return $this->identityMap[$classname];
        }
        throw new EmptyCacheException();
    }
}