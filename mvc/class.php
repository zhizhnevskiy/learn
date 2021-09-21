<?php

abstract class Cars
{
    abstract public function print();
}

class Car extends Cars
{
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';

    public function print()
    {
        echo $this->public . '<br>';
        echo $this->protected . '<br>';
        echo $this->private . '<br>';
    }
}

$object = new Car();

echo 'echo $object->public = ' . $object->public . '<br>';

$object->print();