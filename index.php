<?php

require 'functions.php';

require 'Task.php';

// POJO
// POPO
// PLAIN OLD OBJECT
// CONTENEDOR / ESTRUCTURA DE DADES

$task = new Task("Aprendre PHP",false);
var_dump($task);
//$task->completed = true;
$task->complete();
$task->description("Un altre cosa");
echo $task->completed();
var_dump($task);

//$task1 = new Task("Netejar habitació", true);
//$task2 = new Task("Comprar pa", false);
//$task3 = new Task("Sortir més", true);

//$task2 = new Task;
//$task3 = new Task;
//$task = new Task();

//var_dump($task);
//require 'index.template.php';