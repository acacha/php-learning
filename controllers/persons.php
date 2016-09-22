<?php

$persons = $query->all('Persons');

require 'views/persons.template.php';


//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE