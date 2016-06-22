<?php

if (isAppLoggedIn())  {
	include("dbconnect.php");
	// Prepare statistics:

	$TempSQL = "SELECT * FROM tblSerial"; // Subtotal serial keys
	$result = $mysqli->query($TempSQL);
	$totalKeys = mysqli_num_rows($result);

	$TempSQL = "SELECT * FROM tblSerial WHERE serialStatus=0"; 
	$result = $mysqli->query($TempSQL);
	$numKeys[0] = mysqli_num_rows($result);

	$TempSQL = "SELECT * FROM tblSerial WHERE serialStatus=1"; 
	$result = $mysqli->query($TempSQL);
	$numKeys[1] = mysqli_num_rows($result);

	$TempSQL = "SELECT * FROM tblSerial WHERE serialStatus=2"; 
	$result = $mysqli->query($TempSQL);
	$numKeys[2] = mysqli_num_rows($result);

	$TempSQL = "SELECT * FROM tblSerial WHERE serialStatus=3"; 
	$result = $mysqli->query($TempSQL);
	$numKeys[3] = mysqli_num_rows($result);
?>
	<center>
	<h2>Serial Key Managment System</h2>
	<h3>Developed by Itay Asayag, MediQ Inc.</h3></center>
	<hr />
	<h3>Statistics:</h3>
	<ul>
	<?php
	echo ("<li>Number of Serial Keys: $totalKeys</li>");
	echo ("<li>Number of Serial Keys <b>pending use</b>: " . $numKeys[0]) . "</li>";
	echo ("<li>Number of Serial Keys <b>activated</b>: " . $numKeys[1]) . "</li>";
	echo ("<li>Number of Serial Keys <b>disactivated</b>: " . $numKeys[2]) . "</li>";
	echo ("<li>Number of Serial Keys <b>awating activation</b>: " . $numKeys[3]) . "</li>";
	?>
	Awating activation -> pending use -> activated -> disactivated
	</ul>
	<?php
} else {
	echo($must_login);
}
