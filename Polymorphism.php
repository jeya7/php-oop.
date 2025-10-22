<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("jiro");
var_dump($company);

$company->programmer = new BackendProgrammer("jiro");
var_dump($company);

$company->programmer = new FrontendProgrammer("jiro");
var_dump($company);

sayHelloProgrammer(new Programmer("jiro"));
sayHelloProgrammer(new BackendProgrammer("jiro"));
sayHelloProgrammer(new FrontendProgrammer("jiro"));