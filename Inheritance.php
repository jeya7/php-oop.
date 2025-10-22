<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "jiro";
$manager->sayHello("dion");

$vp = new VicePresident();
$vp->name = "jiro";
$vp->sayHello("dion");
