<?php

namespace Decorator;

class ChromeNotificationDecorator extends Decorator
{
    public function sendNotification(string $text)
    {
        echo "Уведомление с текстом $text отправлено через Chrome" . "<br>";
        $this->type->sendNotification($text);
    }

}