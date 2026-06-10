<?php

require_once 'class/poleVaulter.php';

$poleVaulter1 = new PoleVaulter("David", "Spanish");
$poleVaulter2 = new PoleVaulter("Jacek", "Polish");
$poleVaulter3 = new PoleVaulter("Dimitri","Russian");
$poleVaulter4 = new PoleVaulter("Jean Pierre", "French");
$poleVaulter5 = new PoleVaulter("Yuchen", "Chinese");

echo $poleVaulter1->compete();
echo $poleVaulter2;

//llamando a __serialize() *convierte un objeto a string - se transmite
$serializado = serialize($poleVaulter3);
echo $serializado.PHP_EOL;

//aquí se reconstruye
$reconstruido = unserialize($serializado);
echo $reconstruido;

?>