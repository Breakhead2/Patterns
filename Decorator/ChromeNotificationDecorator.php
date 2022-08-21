<?php

namespace Decorator;

class ChromeNotificationDecorator implements NotificationInterface
{
    protected $sms;

    public function __construct(NotificationInterface $sms)
    {
        $this->sms = $sms;
    }

    public function sendNotification(string $text)

    {
        echo "Уведомление с текстом $text отправлено через Chrome" . "<br>";
        $this->sms->sendNotification($text);
    }

}