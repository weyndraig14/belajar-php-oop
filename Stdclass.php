<?php

$array = [
    "firstName" => "Agung",
    "middleName" => "Timotius",
    "lastName" => "Sinaga"
];

$object = (object) $array;

var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arraylagi = (array) $object;
var_dump($arraylagi);

require_once "data/Person.php";

$person = new Person("Agung", "Cileungsi");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);