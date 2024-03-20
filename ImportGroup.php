<?php


require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpme};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();
