<?php

class QueryBuilder {

    /**
     * @param $pdo
     */
    function all($pdo,$table)
    {
        $query = $pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }
}