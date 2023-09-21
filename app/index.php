<?php

require 'app/helpers.php';

require 'app/Task.php';


//$task = new Task(1, 'comprar pa', 'a la panaderia', 0);
//
//var_dump($task);

$usuario = 'debian-sys-maint';
$pass = 'enQOuqHhHjod5wHr';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $usuario, $pass);
}catch (\Exception $e){
    echo 'Error de conexio a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ, 'task');

//var_dump($tasks);

// API

$greeting = greet();