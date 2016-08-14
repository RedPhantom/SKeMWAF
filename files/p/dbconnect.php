<?php

require_once("../../config.php");

//Connect to database:

/*   obsolete as of v0.9.2
 * if you do not use the configuration file, remove the remark
 * signs for this code.
 */
 
/*
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "root");   		
define("PASSWORD", "2208351");    // The database password. 
define("DATABASE", "SerialVal");    
*/


// Database settings
$dbhost = HOST;			# The host domain of the MySQL database.
$dbname = DATABASE;		# The name of the database in the domain.
$dbuser = USER;			# The name of the user that has read/write/update (root) privleges.
$dbpass = PASSWORD;		# The password of said user.


define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

if ($mysqli->connect_errno) {
    echo "Failed to connect to database: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->select_db("$dbname");
