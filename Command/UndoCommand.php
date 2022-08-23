<?php

namespace Command;

use Command\Interfaces\UndoableCommand;

class UndoCommand implements UndoableCommand
{
    public function undo()
    {
        echo "Отменить последню команду";
    }

}