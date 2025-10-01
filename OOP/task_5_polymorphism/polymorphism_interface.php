<?php

interface ICar{
    public function EngineIsRunning(): bool;
    public function EngineStart(): void;
    public function EngineStop(): void;
    public function Refuel(float $liters): void;
    public function RunningIdle(): void;
}

interface IEngine{
    public function IsRunning(): bool;
    public function Consume(float $liters): void;
    public function Start():void;
    public function Stop():void;

}

interface IFuelTank{
    public function FillLevel(): float;
    public function IsOnReserve():bool;
    public function IsComplete():bool;
    public function Consume(float $liters): void;
    public function Refuel(float $liters): void;

}

interface IFuelTankDisplay{
    public function FillLevel():float;//надо get
    public function IsOnReserve(): bool;//надо get
    public function IsComplete(): bool;//надо get

}

?>
