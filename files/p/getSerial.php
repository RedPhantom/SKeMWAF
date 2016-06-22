<?php

include("dbconnect.php");

$getDataQuery = "SELECT * FROM tblSerial WHERE serialStatus=0 LIMIT 1";
$result = $mysqli->query($getDataQuery);

if (!$result) {
    throw new Exception("Database Error [{$this->database->errno}] {$this->database->error}");
}

if($result === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
}


if (mysqli_num_rows($result) > 0) {
	if($row = $result->fetch_assoc()) { # must be if and not while because there is only one row in this query.
		$timedate = $row['serialCreatedTimestamp'];
		$latestTimestamp = date('Y-m-d H:i:s');

		echo "Your serial key is: <center><h3>" . $row['serialKey'] . "</h3></center>Please print this and save the key.<br>Serial ID: <b>" . $row['serialID'] . "</b><br>Time of generation: <b>$timedate</b>.<br>";
		
		$registerSerialQuery = "UPDATE tblSerial SET serialStatus=3,serialLatestTimestamp='$latestTimestamp' WHERE serialID='" . $row['serialID'] . "'";
		$result = $mysqli->query($registerSerialQuery);
		echo "The serial key has been registred to you and is pending activation.";
	}
} else {
	echo('No serial was found. <a href="./?p=gen">Generate keys</a>.');
	
}
?>

<div style="text-align: center;">
<a class="btn btn-default" href="#" onClick="window.print();"><i class="fa fa-print">&nbsp;</i>Print</a>
</div>
