<?php

require 'functions.php';

require 'Task.php';

$pdo = connect();

$tasks = allTasks($pdo);

//$tasks = Task::all();
//
require 'index.template.php';