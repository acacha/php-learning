<?php

function hello($name, $sn1){
    echo "Hola " . $name . " " . $sn1 . " !";
}

function hellovtortosina($name, $sn1 = "Curto"){
    echo "Hola " . $name . " " . $sn1 . " !";
}

function printArgs($args) {
    foreach ($args as $arg) {
        echo $arg . ',';
    }
}

function sum() {
    return array_sum(func_get_args());
}

/**
 * @return PDO
 */
function connect()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
        return $pdo;
    } catch (PDOException $e) {
        die("Ha succeït un error durant la connexió. Missatge: " . $e->getMessage());
    }
}

/**
 * @param $pdo
 */
function allTasks($pdo)
{
    $query = $pdo->prepare('SELECT * FROM todos');

    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
}