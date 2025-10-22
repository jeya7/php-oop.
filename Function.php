<?php

require_once "data/Person.php";

$eko = new Person("jiro", "sumatra");
$eko->name = "jiro";
$eko->sayHello("dion");

$joko = new Person("Jiro", "sulawesi");
$joko->name = "Jiro";
$joko->sayHello(null);

$eko->info();
$joko->info();