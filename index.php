<?php
define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/', function () {

    
}, 'GET');
//Home page//

$Route->run('/');
