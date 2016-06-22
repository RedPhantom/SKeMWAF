<?php

require_once ('dbconnect.php');

?>

<h2>Get Data by Serial ID</h2>

<?php

if (isAppLoggedIn()) {
	
?>

</p>
   
Enter the serial ID number to receive information about the serial.
<center>
<div class="well" style="width:25%;">
<form method="POST" action="?p=lookup">
<b>Serial ID</b> &nbsp; <input type="text" class="form-control" placeholder="12345" name="serialId"><br />
<button type="submit" class="btn btn-default">Search</button>
</form></div><center>
<?php
	if (isset($_POST['serialId'])) {
		$serialId = $_POST['serialId'];
		$serialId = stripslashes($serialId);
		$serialId = mysqli_escape_string($mysqli, $serialId);
		if ($serialId != "") {
			$getDataQuery = "SELECT * FROM tblSerial WHERE serialId=$serialId";
			$result = $mysqli->query($getDataQuery);
?>
			<h2>Data received from Serial ID <?php
			echo ($serialId); ?></h2>
			<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$timestamp = $row['serialLatestTimestamp'];
					$dt = new DateTime("@$timestamp");
					$datetime = $dt->format('Y-m-d H:i:s');
					$dataString = $row['serialData'];
					parse_str($dataString, $data);
					$osName = $data['osName'];
					$osPlatform = $data['osPlatform'];
					$osVersion = $data['osVersion'];
					echo "Serial ID: $serialId<br />";
					switch ($row["serialStatus"]) {
					case 0:
						$status = "pending";
						break;

					case 1:
						$status = "active";
						break;

					case 2:
						$status = "disactivated";
						break;
					}

					echo ("Status: <b>$status</b> (on $datetime, timestamp $timestamp)<br />");
					echo ("System data: running <b>$osName</b> ($osPlatform) $osVersion<br />");
				}
			}
			else {
				echo "No results found for serial ID <b>$serialId</b>.<br />";
			}
		}
	}
}
else {
	echo($must_login);
}

