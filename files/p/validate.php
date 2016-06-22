<?php

// Receive data from the request via POST:

$osPlatform = isset($_POST['info_os_platform']) ? $_POST['info_os_platform'] : '';
$osVersion = isset($_POST['info_os_version']) ? $_POST['info_os_version'] : '';
$osName = isset($_POST['info_os_name']) ? $_POST['info_os_name'] : '';

$dataStr = "osPlatform=$osPlatform&osVersion=$osVersion&osName=$osName"; //use parse_str to parse this string like a "GET"

$timedate = isset($_POST['timedate']) ? $_POST['timedate'] : time();
$serial = $_POST['serial'];

// Possible status values:
/*
0 - pending
1 - activated
2 - deactivated
3 - given away
*/

// Connect to database:
require_once("dbconnect.php"); // outputs a mysqli object ready to work with.

$serial = stripslashes($serial);
$serial = $mysqli->escape_string($serial);
$serialCheckQuery = "SELECT * FROM tblSerial WHERE serialKey='$serial' AND serialStatus=3";

$result = $mysqli->query($serialCheckQuery);
$count = $result->num_rows;

if ($count == 1) {
    echo "true";
} else {
    echo "false";
	exit(); // Stop from proceeding to register the serial key.
}

$serialUpdateQuery = "UPDATE tblSerial SET serialStatus=1,serialData='$dataStr',serialLatestTimestamp='$timedate' WHERE serialKey='$serial'";
$mysqli->query($serialUpdateQuery); // Serial is updated. Process finished.

$mysqli->close();
