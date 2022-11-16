<?php

session_start();

define('BURL', "http://localhost/medical-project/");
define('BURLA', "http://localhost/medical-project/admin/");
define('ASSETS', "http://localhost/medical-project/assets/");

define('BL' , __DIR__ ."/");
define('BLA' , __DIR__ ."/admin/");


// connection with database 
require_once(BL.'functions/DBimplementation.php')

?>