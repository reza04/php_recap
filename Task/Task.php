<?php

class Task 
{
    protected $description;
    protected $complete=false;
    
    public function __construct($description)
    {
        $this->description=$description;
    }

    public function isComplete()
    {
        return $this->complete;
    }

    public function complete()
    {
        $this->complete=true;
    }

    public function description()
    {
        return $this->description;
    }
}

$tasks=[
    new Task("Go tot store"),
    new Task("Go to the market"),
    new Task("Finish project")
];

$tasks[0]->complete();






