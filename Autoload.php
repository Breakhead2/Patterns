<?php

class Autoload
{
    public function loadClass($className)
    {
        $fileName = "$className.php";
        include $fileName;
    }
}