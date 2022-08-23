<?php

namespace Command\Interfaces;

interface UndoableCommand extends Command
{
    public function undo();
}