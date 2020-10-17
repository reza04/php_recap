<?php

abstract class Shape
{
    protected $color;

    public function __construct($color="Black")
    {
        $this->color=$color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public abstract function getArena(); 
}

class Square extends Shape
{
    protected $side =40;

    public function getArena()
    {
        return pow($this->side,2);
    }
}

class Triangel extends Shape
{
    private $base=27;

    private $height=12;

    public function getArena()
    {
        return 5*$this->base*$this->height;
    }
}


class Circle extends Shape
{
    private $radius=28;

    public function getArena()
    {
        return $this->radius/2;
    }
}

echo (new Circle())->getArena();

// echo pow(2,2);