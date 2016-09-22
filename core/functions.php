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

