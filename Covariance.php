<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\catShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\dogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food());

