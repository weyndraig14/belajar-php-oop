<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Sinaga";
$manager->sayHello("Vior");

$vp = new VicePresident();
$vp->name = "Agung";
$vp->sayHello("Aldy");