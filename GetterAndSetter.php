<?php

require_once "data/Category.php";

$category = new Category(); 
$category->setName("PC");
$category->setExpensive(true);

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;