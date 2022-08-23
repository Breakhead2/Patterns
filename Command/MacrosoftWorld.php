<?php

namespace Command;


use Command\Interfaces\Command;

class MacrosoftWorld
{
    public function editText(Command $command){
        $command->execute();
        $this->log($command);
    }

    protected function log($command){
        $file = fopen("log.txt", "a+");
        fputs($file,  $command->commandName . "\r\n");
    }

}