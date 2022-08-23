<?php

namespace Command;

use Command\Interfaces\Command;

class PastCommand implements Command
{
    public string $commandName;

    public function __construct()
    {
        $this->commandName = "Вставить";
    }
    public function execute()
    {
        echo "Вставить текст";
    }
}