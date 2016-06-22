<?php
require("dbconnect.php");

function createSerial() {
	$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$serial = '';
	$max = count($chars)-1;
	for($i=0;$i<20;$i++){
		$serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
	}
	return $serial;
}

if (mysqli_num_rows($mysqli->query("SELECT * FROM tblSerial where serialStatus=0")) < 10) {
	$i = 0;
	$t = date('Y-m-d H:i:s');
	
	while ($i < 10) {
		$tempSerial = createSerial();
		$serialCreateQuery = "INSERT INTO tblSerial (serialKey, serialStatus, serialData, serialCreatedTimestamp) VALUES ('$tempSerial',0,'','" . $t . "')";
		$mysqli->query($serialCreateQuery);
		echo($mysqli->error) . "<br>";
		$i++;
		echo('Added serial <font style="font-size: 14px;">' . $tempSerial . '</font><br>');
	}	
} else {
	echo(make_message(2, "<strong>No new keys were added.</strong>&nbsp;There was no need to generate new keys. A minimum of 10 pending exist in the server."));
}
?>
