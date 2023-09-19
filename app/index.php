<?php

// QUERY STRING
//var_dump($_GET['name']);
$name = 'Sergio';
$greeting = 'Hola ' . $_GET['name'] . '!';

echo $greeting;  // Esto imprimirá: Hola Sergio!
