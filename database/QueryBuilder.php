<?php


class QueryBuilder {

    public $pdo;

    /**
     *
     * DEPENDENCY INJECTION
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    // Collaborators / Dependencies

    // Dependency injection

    /**
     * @param $pdo
     *
     * Type hinting
     */
    function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $query->fetchAll(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            Task::class);
    }

//    function quasiAll();
//
//    function deleteAll();
//
//    function deleteOne();
}