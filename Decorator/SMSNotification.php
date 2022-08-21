<?php

namespace Decorator;

class SMSNotification implements NotificationInterface
{

    public function sendNotification($text)
    {
        echo "Уведомление с текстом $text отправлено по СМС"  . "<br>";
    }

}