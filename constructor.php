<?php

class Human{

    public $name;
    public $age;
    public $height;
    public $weight;
    public $num_of_legs;

    public function __construct($name, $age, $height, $weight, $num_of_legs)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
        $this->num_of_legs = $num_of_legs;
    }
    

    public function getdetails()
    {
        echo "Name => $this->name <br/> Age => $this->age <br/> Height => $this->height <br/> Weight => $this->weight<br/> NO.Of legs => $this->num_of_legs <br/> ";
    }

}

// constructor will call automatically when we create an object of that class.

$hum = new Human("Ali", 25, 5.7, 69.5, 2);
$hum->getdetails();

// $human1->name = "Abdul Moeed";
// $human1->age = 23;
// $human1->height = "5'8";
// $human1->weight = 55 ;
// $human1->num_of_legs = 2;
// $human1->is_married = false;
// $human1->haircolor = "Black";
// $human1->eyecolor = "Brown <br/>";
// $human1->getdetails();


// $human2 = new human();
// $human2->name = "Abdul Hadi";
// $human2->age = 16;
// $human2->height = "5'6";
// $human2->weight = 40 ;
// $human2->num_of_legs = 2;
// $human2->is_married = false;
// $human2->haircolor = "Brown";
// $human2->eyecolor = "golden <br/>";
// $human2->getdetails();


// $human3 = new human();
// $human3->name = "Zahid";
// $human3->age = 25;
// $human3->height = "6";
// $human3->weight = 60 ;
// $human3->num_of_legs = 2;
// $human3->is_married = true;
// $human3->haircolor = "Brown";
// $human3->eyecolor = "blue";
// $human3->getdetails();



?>