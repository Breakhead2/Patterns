<?php

namespace Command;

use Command\Interfaces\Command;

class CutCommand implements Command
{
    public string $commandName;

    public function __construct()
    {
        $this->commandName = "Вырезать";
    }


    public function execute()
    {
        echo "Вырезать текст";
    }

}