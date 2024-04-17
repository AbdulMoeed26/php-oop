<?php

use A as GlobalA;
use B as GlobalB;

class A{
    public $name;


public function prin($name){
    echo "hello $this->name";
}

}

class B extends A{

}

$myb=new B();
$myb->prin("ali"); 
?>