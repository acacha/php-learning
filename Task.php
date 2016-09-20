<?php

class Task {

    protected $description;

    private $completed;

    public function __construct($description, $completed) {
        $this->description = $description;
        $this->completed = $completed;

    }

    public function complete() {

        $this->completed = true;
    }

    public function setDescription($description) {

        $this->description = $description;
    }

    public function getCompleted(){
        return $this->completed;
    }

    public function description($description) {

        $this->description = $description;
    }

    public function completed(){
        return $this->completed;
    }


    public function completed($completed=null) {
        if ($completed == null) {
            return $completed;
        }
        $this->completed = $completed;
    }



}