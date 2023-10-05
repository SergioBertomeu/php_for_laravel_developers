<?php

use Framework\App;

require 'vendor/autoload.php';

require 'framework/bootstrap.php';




// URL
// ROUTER -> API redirect quina URL m'ha demanat l'usuari -> he d'optenir el controlador que toca i execuatr-lo


//dd($_GET);

// FACADES -> IOC CON -> App
App::get('router')->redirect($_SERVER['REQUEST_URI']);


//require 'app/index.php';
