<?php

class person
{

    public $name, $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    function show()
    {
        echo "My name is $this->name and age is $this->age";
    }
}

$p1 = new person("priyanhsu Bhardwaj", 39);

$p1->show();
