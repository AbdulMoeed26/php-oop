<?php

class Animal
{
    public $eyecolor;
    public $num_of_legs;
    public $name;
    public $is_pet;

    public function walking()
    {
        echo "This animal walks with legs";
    }

    public function details()
    {
        echo "Name => $this->name <br/> Eye color => $this->eyecolor <br/> Is pet => $this->is_pet <br/>" ;
    }
}


$animal1 = new Animal();
$animal1->name = "Persian Cat";
$animal1->eyecolor = "Blue";
$animal1->num_of_legs = 4;
$animal1->is_pet = true;
$animal1->details();


$animal2 = new Animal();
$animal2->name = "Dog";
$animal2->eyecolor = "white";
$animal2->num_of_legs = 4;
$animal2->is_pet = true;
$animal2->details();

?>