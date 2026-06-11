<?php
/*
Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima). A més, implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un missatge “S’ha iniciat el turbo”. Usa aquest mètode des de la classe Car.
*/
require_once 'classlevel2/car.php';

$car1 = new Car("Mercedes", "4556 DCH", Fuel::Gasoline, 195);

$car1->boost();

echo $car1;

$car1();
?>