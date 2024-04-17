<?php

class Human{
   public $name;
   public $age;
   public $cnic;


   public function __construct($name, $age, $cnic)
   {
    $this -> name = $name;
    $this -> age = $age;
    $this -> cnic = $cnic;
   }

   public function getdetil(){
    echo"Name => $this->name <br/> Age => $this->age <br/> Cnic = $this->cnic";
   }
}

$abc = new Human("ali", 19, 910290192);
$abc->getdetil();

?>