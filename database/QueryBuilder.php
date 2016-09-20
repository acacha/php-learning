<?php


//COL·LABORADORS


class Contract {

    public $arquitecte;
    public $paletes;
    public $lampista;

    /**
     * Contract constructor.
     * @param $arquitecte
     * @param $paletes
     * @param $lampista
     */
    public function __construct($arquitecte, $paletes, $lampista)
    {
        $this->arquitecte = $arquitecte;
        $this->paletes = $paletes;
        $this->lampista = $lampista;
    }


    public function buildHome($arquitecte, $paletes, $lampista) {
        $arquitecte->disenyar();
        $paletes->construir();
        $lampista->work();
//        $this->yesista->work();
    }

}




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