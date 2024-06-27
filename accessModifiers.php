//Public access modifier

<?php

class base
{

    public $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show()
    {
        echo "your name is : " . $this->name . "<br/>";
    }
}

$test1 = new base("Priyanhsu Baba");

$test1->name = "Baba Priyanshu";

$test1->show();


?>


//Protected access modifier

<?php

class person
{

    protected $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    protected function show()
    {
        echo "your name is : " . $this->name;
    }
}

class derived extends person
{
    public function result()
    {
        echo "your name is : " . $this->name . "<br/>";
    }
}

// $test2 = new person("Priyanhsu Baba"); 

$test2 = new derived("Priyanhsu Baba");

// $test2->name = "Baba Priyanshu";

// $test2->show();  //canot get access due to protected

$test2->result();

?>


//Private access modifier

<?php

class boy
{

    private $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show()
    {
        echo "your name is : " . $this->name . "<br/>";
    }
}

$test1 = new boy("Priyanhsu Baba");

// $test1->name = "Baba Priyanshu";

$test1->show();

?>