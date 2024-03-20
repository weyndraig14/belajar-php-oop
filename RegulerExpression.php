<?php

$matches = [];
$result = preg_match_all("/agung|tim|sin/i", "Agung Timotius Sinaga", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/a|b/i", "***", "Dasar lu A dan B!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Eko Kurniawan Khannedy, Programmer, Zaman-Now");

var_dump($result);
