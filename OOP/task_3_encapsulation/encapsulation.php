<?php

class Pong{
    private $max_score;
    private $s1=0;
    private $s2=0;
    private $cur_player=1;
    private $paddle_h=7;
    private $ball_h=1;
    private $score=1;

    public function __construct($max_score)
    {
        $this->max_score = $max_score;
    }

    public function play($y_ball,$y_player){
        if($this->s1==$this->max_score || $this->s2==$this->max_score)
            return "Game Over!";

        if(($y_player - $this->paddle_h/2) <= $y_ball && $y_ball<= ($y_player + $this->paddle_h/2)) {
            $a=$this->cur_player;
            if($this->cur_player == 1) {
                $this->cur_player=2;
            }
            else {
                $this->cur_player=1;
            }
            return "Player $a has hit the ball!";
        }

        if($y_ball > $y_player || $y_ball < $y_player){
            $a=$this->cur_player;

            if($this->cur_player == 1) {
                $this->s2++;
                $this->cur_player=2;
            }
            else {
                $this->s1++;
                $this->cur_player=1;
            }
            if($this->s1==$this->max_score) {
                return "Player $this->cur_player has won the game!";
            }
            else if($this->s2==$this->max_score) {
                return "Player $this->cur_player has won the game!";
            }
            else {
                return "Player $a has missed the ball!";
            }
        }
    }
}

$game = new Pong(2);
echo $game->play(50,53);
echo $game->play(100,97);
echo $game->play(0,4);
echo $game->play(25,25);
echo $game->play(75,25);
echo $game->play(50,50);


?>
