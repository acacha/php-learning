<?php

require "core/bootstrap.php";

$tasks = $query->all('todos');

require 'index.template.php';


//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE