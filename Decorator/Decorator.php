<?php

namespace Decorator;

abstract class Decorator implements NotificationInterface
{
    protected NotificationInterface $type;

    public function __construct(NotificationInterface $type)
    {
        $this->type = $type;
    }

    public function sendNotification(string $text)
    {
        $this->type->sendNotification($text);
    }
}