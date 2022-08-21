<?php

use Decorator\{ChromeNotificationDecorator, SMSNotification, EmailNotificationDecorator};

include "Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$notification = new ChromeNotificationDecorator(
    new EmailNotificationDecorator(new SMSNotification(), "test@test.ru")
);

$notification->sendNotification("Hello world");