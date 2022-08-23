<?php

use Observer\{Resource, Applicant};
use Strategy\{Shop, YandexPayment, QiwiPayment, WebMoneyPayment};

include "Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$resource = new Resource();
$applicant = new Applicant("Denis", "test@test.test", 2);

//$resource->attach($applicant);
//$resource->createVacancy("новая");

//========================================================================================

(new Shop())->choosePayment(new YandexPayment(),1200, "222-55-33");
