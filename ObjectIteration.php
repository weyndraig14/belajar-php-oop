<?php

class Data implements IteratorAggregate 
{
    var string $first = "First";
    var string $second = "Second";
    var string $third = "Third";
    var string $forth = "Forth";

    
    public function getIterator()
    {
        yield "first" => $this->first;
        yield "second"=> $this->second;
        yield "third"=> $this->third;
        yield "forth"=> $this->forth;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}