//<?php

class Person

{
    public $name;
    
    protected $age;

    public function __construct($name)
    {
        $this->name=$name;
    }
    
    public function setAge($age)
    {
        if ($age <18)
        {
            //throw new Exception("Your not allowed");
            exit("Your not allowed");
        }

        $this->age=$age;
    }

    public function getAge()
    {
        return $this->age; //* 365;
    }

    public function __toString()
    {
        return $this->name;
    }

}

$john =  new Person($argv[1]);

$john->setAge($argv[2]);

echo " Your name ".$john." and you age ".$john->getAge();



// $john->age = 38;

// var_dump($json->setAge);

