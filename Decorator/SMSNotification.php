<?php

namespace Decorator;

class SMSNotification extends Decorator
{
    public function sendNotification(string $text)
    {
        echo "Уведомление с текстом $text отправлено по СМС"  . "<br>";
    }

}