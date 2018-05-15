<?php

require_once "../init.php";

$demo = new \prototype\Demo();
$demo->setState('open');
$demo1 = $demo->copy();
echo $demo1->getState();