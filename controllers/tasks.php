<?php

$tasks = $query->all('todos');

require 'views/tasks.template.php';


//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE