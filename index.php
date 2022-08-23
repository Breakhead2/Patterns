<?php

use Observer\{Resource, Applicant};

include "Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$resource = new Resource();
$applicant = new Applicant("Denis", "test@test.test", 2);

$resource->attach($applicant);
$resource->createVacancy("новая");
