<?php

require "core/bootstrap.php";

require "core/Request.php";
require "core/Router.php";

require Router::load('routes.php')->direct(Request::uri());
