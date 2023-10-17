<?php

use Framework\App;

$users = App::get('database')->selectAll('users');
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

require '../resources/views/users.blade.php';