<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Intel";
$cat->run();


$dog = new Dog();
$dog->name = "Ryzen";
$dog->run();

