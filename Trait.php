<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("jiro");
$person->hello("geo");

$person->name = "jiro";
var_dump($person);

$person->run();