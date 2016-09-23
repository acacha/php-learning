<?php

$query = $this->pdo->prepare("SELECT * FROM {$table}");

$query->execute();

return $query->fetchAll(
    PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
    Task::class);

echo "Hola " . $_POST['name'];

