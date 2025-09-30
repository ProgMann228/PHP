<?php

class Hero {
    public $name;
    public $position;
    public $health;
    public $damage;
    public $experience;

    public function __construct($name="Hero"){
        $this->name = $name;
        $this->position = '00';
        $this->health = 100;
        $this->damage = 5;
        $this->experience = 0;
    }

}
$hero1=new Hero();
$hero2=new Hero("Dobrinya");
/*
echo "$hero1->name, $hero1->position, $hero1->health, $hero1->damage, $hero1->exp\n";
echo "$hero2->name, $hero2->position, $hero2->health, $hero2->damage, $hero2->exp";
*/
?>