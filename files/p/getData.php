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
					$dataString = $row['serialData'];
					if (! $dataString == "") {
						parse_str($dataString, $data);
						$osName = $data['osName'];
						$osPlatform = $data['osPlatform'];
						$osVersion = $data['osVersion'];
					} else {
						$message = "Serial data (Activated OS, Version etc...) could not be received.";
					}
					echo "Serial ID: $serialId<br />";
					switch ($row["serialStatus"]) {
					case 0:
						$status = "pending give-away";
						break;

					case 1:
						$status = "given away, pending activation";
						break;

					case 2:
						$status = "disactivated";
						break;
					
					case 3:
						$status = "Activated";
						break;
					}

					echo ("Status: <b>$status</b> on $timestamp<br />");
					if (! isset($message)) {
						echo ("System data: running <b>$osName</b> ($osPlatform) $osVersion<br />");
					} else {
						echo $message;
					}
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

