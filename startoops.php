<?php

class calculation
{
    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->b - $this->a;
        return $this->c;
    }
}

$c1 = new calculation();
$c1->a = 10;
$c1->b = 20;

echo $c1->sum() . "\n";

echo $c1->sub();
