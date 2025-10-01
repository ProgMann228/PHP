<?php
require_once 'polymorphism_interface.php';
require_once 'polymorphism_classes.php';

$tank=new FuelTank();
$engine=new Engine($tank);
$car=new Car($engine,$tank);
$display = new FuelTankDisplay($tank);

$car->EngineStart();
echo "Fuel level: " . $display->FillLevel() . "<br>";
echo "On reserve: " . ($display->IsOnReserve() ? 'Yes' : 'No') . "<br>";
echo "Tank full: " . ($display->IsComplete() ? 'Yes' : 'No') . "<br><br>";

for($i=0; $i<100000; $i++) {
    $car->RunningIdle();
}
echo "Fuel level: " . $display->FillLevel() . "<br>";
echo "On reserve: " . ($display->IsOnReserve() ? 'Yes' : 'No') . "<br>";
echo "Tank full: " . ($display->IsComplete() ? 'Yes' : 'No') . "<br><br>";

$car->Refuel(10);

echo "Fuel level: " . $display->FillLevel() . "<br>";
echo "On reserve: " . ($display->IsOnReserve() ? 'Yes' : 'No') . "<br>";
echo "Tank full: " . ($display->IsComplete() ? 'Yes' : 'No') . "<br><br>";

$car->Refuel(100);

echo "Fuel level: " . $display->FillLevel() . "<br>";
echo "On reserve: " . ($display->IsOnReserve() ? 'Yes' : 'No') . "<br>";
echo "Tank full: " . ($display->IsComplete() ? 'Yes' : 'No') . "<br><br>";



?>
