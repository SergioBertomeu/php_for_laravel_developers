<?php

use Framework\App;


require 'app/helpers.php';


$tasks = App::get('database')->selectAll('tasks');

//$tasks =  Task::selectAll('tasks'); -> Laravel Eloquent
//$database = new Database(App::get('config')['database']); // -> Lsravel no utilitzem gairebé mai new -> DI i Containers
//$tasks =  Database::selectAll('tasks'); // Crida estàtica -> sense new




$greeting = greet();