<?php
//Connect to database:

define("HOST", "CHANGE ME!");     // The host you want to connect to.
define("USER", "CHANGE ME!");   		
define("PASSWORD", "CHANGE ME!");    // The database password. 
define("DATABASE", "CHANGE ME!");    

define("CAN_REGISTER", "any"); // ulogin?
define("DEFAULT_ROLE", "member");
 
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

if ($mysqli->connect_errno) {
    echo "Failed to connect to database: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->select_db("$dbname");
