<?php

//IMPORTANTE - session_start() siempre en la 1ra línea de php. 
session_start();

//SUPERGLOBALS
$name = $_POST['name'];
$email = $_POST['user_email'];
$age = $_POST['age'];

//Variables de sesión
$_SESSION['name'] = $name;
$_SESSION['user_email'] = $email;

//Se muetran los valores
echo "Hola ".$name."<br>";
echo "Tienes ".$age." años"."<br>";
echo "Tu email: ".$email." ha quedado registrado"."<br>";


//MAGIC CONSTANTS

echo "Usando constantes mágicas: "."<br>";
echo "Texto escrito en la línea: ".__LINE__."<br>";
echo "Este archivo está en la carpeta: ".__DIR__;

?>