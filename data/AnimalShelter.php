<?php

namespace Data;

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class catShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name; 
        return $dog;
    }
}