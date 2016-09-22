<?php

/*
 * POPO: Plain Old PHP Object | Contenedor de tasques | Model
 */
class Task {

    public $description;

    public $completed;

    public function __construct($description, $completed) {
        $this->description = $description;
        $this->completed = $completed;
    }

    public function complete() {

        $this->completed = true;
    }



}