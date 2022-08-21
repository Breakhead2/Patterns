<?php

namespace Decorator;

class EmailNotificationDecorator implements NotificationInterface
{
    protected $sms;
    protected $email;

    public function __construct(NotificationInterface $sms , $email)
    {
        $this->sms = $sms;
        $this->email = $email;
    }

    public function sendNotification($text)

    {
        echo "Уведомление с текстом $text отправлено по Email: $this->email" . "<br>";
        $this->sms->sendNotification($text);
    }

}