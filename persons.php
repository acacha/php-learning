<?php

require "core/bootstrap.php";

$persons = $query->all('Persons');

require 'persons.template.php';


//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE