<?php
function greet(){
$name = htmlspecialchars($_GET['name']);
$surname = $_GET['surname'];
return  "Hola $name $surname !";

echo $greeting;  // Esto imprimirá: Hola Sergio!

}