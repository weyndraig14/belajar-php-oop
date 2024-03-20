<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Okto";
$manager->sayHello("Sinaga");

$vp = new VicePresident();
$vp->name = "Sinaga";
$vp->sayHello("Okto");