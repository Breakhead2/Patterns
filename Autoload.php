<?php

class Autoload
{
    public function loadClass($className)

    {
        include "$className.php";;
    }
}