<?php

require_once "../init.php";

$manBuilder = new \builder\ManBuilder();
$womanBuilder = new \builder\WomanBuilder();

$director = new \builder\Director($manBuilder);
$enoch = $director->createPerson('Enoch');
$enoch->talk();

$director = new \builder\Director($womanBuilder);
$mukiii = $director->createPerson('Mukiii');
$mukiii->talk();