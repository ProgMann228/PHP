<?php
require_once 'polymorphism_interface.php';

class Car implements ICar{
    private IEngine $engine;
    private IFuelTank $tank;

    public function __construct(IEngine $engine, IFuelTank $tank){
        $this->engine = $engine;
        $this->tank = $tank;
    }
    public function EngineIsRunning(): bool{
        return $this->engine->isRunning();
    }
    public function EngineStart(): void{
        $this->engine->start();
    }
    public function EngineStop(): void{
        $this->engine->stop();
    }
    public function Refuel(float $liters): void{
        $this->tank->refuel($liters);
    }
    public function RunningIdle(): void{
        if($this->engine->isRunning()){
            $this->engine->Consume(0.0003);
            if($this->tank->FillLevel()<=0)
                $this->engine->Stop();
        }
    }
}

class Engine implements IEngine{
    private bool $running;
    private IFuelTank $tank;
    public function __construct(IFuelTank $tank){
        $this->running = false;
        $this->tank = $tank;
    }
    public function IsRunning(): bool{
        return $this->running;
    }
    public function Start(): void{
        $this->running=true;
    }
    public function Stop(): void{
        $this->running=false;
    }
    public function Consume(float $liters): void{
        if($this->IsRunning()){
            $this->tank->Consume($liters);
        }
    }
}

class FuelTank implements IFuelTank{
    private float $tank;
    private float $max_tank;
    private bool $reserve;
    private bool $complete;
    public function __construct(){
        $this->tank = 20.0;
        $this->max_tank = 60.0;
        $this->reserve = ($this->FillLevel()<5);
        $this->complete = ($this->FillLevel()>=$this->max_tank);
    }
    public function FillLevel(): float{
        return $this->tank;
    }
    public function IsOnReserve():bool{
        return $this->reserve;
    }
    public function IsComplete():bool{
        return $this->complete;
    }
    public function Consume(float $liters): void{
        $this->tank-=$liters;

        if($this->FillLevel()<0)
            $this->tank=0;

        $this->reserve=($this->FillLevel()<5);
        $this->complete=($this->FillLevel()>=$this->max_tank);

    }
    public function Refuel(float $liters): void{
        $this->tank+=$liters;
        if($this->FillLevel()>$this->max_tank)
            $this->tank=$this->max_tank;

        $this->reserve=($this->FillLevel()<5);
        $this->complete=($this->FillLevel()>=$this->max_tank);
    }
}

class FuelTankDisplay implements IFuelTankDisplay{
    private IFuelTank $tank;
    public function __construct(IFuelTank $tank){
        $this->tank = $tank;
    }
    public function FillLevel(): float{
        return $this->tank->FillLevel();
    }
    public function IsOnReserve():bool{
        return $this->tank->IsOnReserve();
    }
    public function IsComplete():bool{
        return $this->tank->IsComplete();
    }
}




?>
