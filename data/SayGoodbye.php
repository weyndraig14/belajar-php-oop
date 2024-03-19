<?php

namespace Data\Traits;

trait sayGoodbye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Goodnight" . PHP_EOL;
        } else {
            echo "Goodnight $name" . PHP_EOL;
        }
    }
}

trait sayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson {
    public function goodBye(?string $name): void 
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void 
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait All {
    use sayGoodbye, sayHello, HasName, CanRun {

    }
}

class person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    
}