<?php

require_once("data/Person.php");

$person = new Person("Sinaga", "Cileungsi");
$person->name = "Sinaga";
$person->address = "Cileungsi";
$person->country = "Indonesia";

var_dump( $person );

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Vior", null);
$person2->name = "Vior";
$person2->address = null;

var_dump( $person2 );