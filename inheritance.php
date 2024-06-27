<?php

class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function information()
    {
        echo "<h3>Employee Profile </h3>";
        echo "Employee Name : " . $this->name . "<br/>";
        echo "Employee Name : " . $this->age . "<br/>";
        echo "Employee Name : " . $this->salary . "<br/>";
    }
}

class manager extends employee
{

    public $ta = 1000;
    public $phone = 300;
    public $totaSalary;

    function information()
    {

        $this->totaSalary = $this->salary + $this->ta + $this->phone;

        echo "<h3>Manager Profile </h3>";
        echo "Employee Name : " . $this->name . "<br/>";
        echo "Employee age: " . $this->age . "<br/>";
        echo "Employee salary : " . $this->totaSalary . "<br/>";
    }
}

#$e1 = new employee("priyanshu", 69, 8989574);
// $e1 = new manager("priyanshu", 69, 8989574);


$e1 = new employee("priyanshu", 69, 10000);
$e2 = new manager("priyanshu", 69, 10000);

$e1->information();


$e2->information();
