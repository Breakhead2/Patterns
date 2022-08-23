<?php

namespace Command;

interface ICommand
{
    public function copy($from, $to);
    public function past($from, $to);
    public function cut($from, $to);
}