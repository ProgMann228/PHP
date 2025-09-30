<?php

class Person{
    protected $name;
    protected $age;
    protected $occupation;

    public function __construct($name, $age, $occupation) {
        if(!is_string($name)){
            throw new InvalidArgumentException("Name must be a string!");
        }
        if(!is_int($age) || $age<0){
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        if(!is_string($occupation)){
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function get_name(){
        return $this->name;
    }
    public function get_age(){
        return $this->age;
    }
    public function get_occupation(){
        return $this->occupation;
    }

    public function set_name($name){
        if(!is_string($name)){
            throw new InvalidArgumentException("Name must be a string!");
        }
        else $this->name = $name;
    }
    public function set_age($age){
        if(!is_int($age) || $age<0){
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        else $this->age = $age;
    }
    public function set_occupation($occupation){
        if(!is_string($occupation)){
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        else $this->occupation = $occupation;
    }
}
class Salesman extends Person{
    public function __construct($name, $age){
        parent::__construct($name, $age,"Salesman");
    }
    public function introduce(){
        return "Hello, my name is $this->name, don't forget to check out my products!";
    }
}

class ComputerProgrammer extends Person{
    public function __construct($name, $age){
        parent::__construct($name, $age,"Computer Programmer");
    }
    public function describe_job(){
        return "I am currently working as a(n) $this->occupation, don't forget to check out my Codewars account ;)";
    }
}

class WebDeveloper extends ComputerProgrammer{
    public function __construct($name, $age){
        Person::__construct($name,$age,"Web Developer");
    }
    public function describe_job(){
        return "I am currently working as a(n) $this->occupation, don't forget to check out my Codewars account ;) And don't forget to check on my website :D";
    }
    public function describe_website(){
        return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
    }
}
/*
$pers1= new WebDeveloper("Karl",23);
$pers2= new ComputerProgrammer("Bob",34);
$pers3= new Salesman("Buba",32);

echo $pers1->describe_job();
echo $pers2->describe_job();
echo $pers3->introduce();
*/
?>
