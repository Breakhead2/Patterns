<?php

namespace Decorator;

class EmailNotificationDecorator extends Decorator
{
    protected $email;
    protected NotificationInterface $type;

    public function setEmail($email){
        $this->email = $email;
    }

    public function sendNotification(string $text)
    {
        mail($this->email, "Уведомление", $text);
        echo "Уведомление с текстом $text отправлено по Email: $this->email" . "<br>";
        $this->type->sendNotification($text);
    }

}