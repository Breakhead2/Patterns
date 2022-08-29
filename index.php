<?php

use Decorator\{ChromeNotificationDecorator, SMSNotification, EmailNotificationDecorator};

use Adapter\{SquareAreaAdapter, CircleAreaAdapter};

include "Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$notification = new ChromeNotificationDecorator(
    new EmailNotificationDecorator(new SMSNotification(), "test@test.ru")
);

//$notification->sendNotification("Hello world");

$square = (new SquareAreaAdapter())->squareArea(2);
echo $square . "<br>";

$circle = (new CircleAreaAdapter())->circleArea(4);
echo $circle  . "<br>";