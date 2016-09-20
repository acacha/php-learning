<?php

require 'functions.php';

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$pdo = Connection::make();

//$connection = new Connection();
//$pdo = $connection->make();

$query = new QueryBuilder();
$tasks = $query->all($pdo,'todos');

//$tasks = Task::all();
//
require 'index.template.php';