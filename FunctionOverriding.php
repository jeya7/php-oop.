<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "dion";
$manager->sayHello("Jiro");

$vp = new VicePresident();
$vp->name = "jiro";
$vp->sayHello("rendy");
