<?php

require_once "data/Person.php";

$sinaga = new Person("Sinaga", "Cileungsi");
$sinaga->name = "Sinaga";
$sinaga->sayHello("Vior");


$vior = new Person("Vior", "Ciwidey");
$vior->name = "Vior";
$vior->sayHello(null);

$sinaga->info();
$vior->info();