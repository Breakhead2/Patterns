<?php

use Observer\{Resource, Applicant};
use Strategy\{Shop, YandexPayment, QiwiPayment, WebMoneyPayment};
use Command\{CutCommand, CopyCommand, PastCommand, MacrosoftWorld};

include "Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$resource = new Resource();
$applicant = new Applicant("Denis", "test@test.test", 2);

$resource->attach($applicant);
//$resource->createVacancy("новая");

//========================================================================================

//(new Shop())->choosePayment(new YandexPayment(),1200, "222-55-33");

//========================================================================================


$invoker = new MacrosoftWorld();
$invoker->editText(new CutCommand());
$invoker->editText(new CopyCommand());
$invoker->editText(new PastCommand());