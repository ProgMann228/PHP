<?php

interface CanFly{
    public function fly();
}

interface CanSwim{
    public function swim();
}

interface CanClimb{
    public function climb();
}

interface CanGreet{
    public function greet($name);
}

interface CanIntroduce{
    public function speak();
    public function introduce();
}

interface CanSpeak{
    public function speak();
}

?>
