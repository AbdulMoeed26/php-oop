<?php


class A
{
    private $name;
    public $age;
    

    public function sayhello()
    {
        echo "Hello $this->name";
    }
    public function sayhi()
    {
        echo "hi $this->name";
    }
}

class B extends A
{
    
}



// you can only access public members using inheritance not private
// public (you can access from anywher in your project)
// private( only access inside a class )
// protected (only access inside a class and a child class )
// $mya = new A("Ali");

// $mya->sayhello();