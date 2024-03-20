<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Sinaga");
var_dump($company);

$company->programmer = new BackendProgrammer("Sinaga");
var_dump($company);

$company->programmer = new FrontendProgrammer("Sinaga");
var_dump($company);

sayHelloProgrammer(new Programmer("Sinaga"));
sayHelloProgrammer(new BackendProgrammer("Sinaga"));
sayHelloProgrammer(new FrontendProgrammer("Sinaga"));