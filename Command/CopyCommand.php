<?php

namespace Command;

use Command\Interfaces\Command;

class CopyCommand implements Command
{
    public string $commandName;

    public function __construct()
    {
        $this->commandName = "Копировать";
    }

    public function execute()
    {
        echo "Копируем текст";
    }
}