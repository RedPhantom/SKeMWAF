<?php

// HEIGHEST permission level! (2)

require_once ('./files/p/dbconnect.php');
$ulogin = new uLogin('appLogin', 'appLoginFail');

if (isAppLoggedIn()) { // if the user is logged in
	if (checkPermission($_SESSION['username'], 2, $mysqli)) { // if the user has permission level 2

?>

<div class="">
					<table class="table table-striped table-hover " style="margin-top: 10px;">
						<tr>
							<td><strong>#</strong></td>
							<td><strong>Serial Key</strong></td>
							<td><strong>Status</strong></td>
							<td><strong>Data</strong></td>
							<td><strong>Creation Date</strong></td>
							<td><strong>Latest Action Date</strong></td>
						</tr>
						<?php
		$getAllSerialQuery = "SELECT * FROM tblSerial";
		$allSerialResult = $mysqli->query($getAllSerialQuery);
		while ($serialsRow = $allSerialResult->fetch_assoc()) { // For each user, create a row and insert data accordingly.

			// Contruct the table row

			echo ("<tr>");
			echo ("<td>" . $serialsRow['serialID'] . "</td>");
			echo ("<td>" . $serialsRow['serialKey'] . "</td>");
			echo ("<td>" . $serialsRow['serialStatus'] . "</td>");
			echo ("<td>" . $serialsRow['serialData'] . "</td>");
			echo ("<td>" . $serialsRow['serialCreatedTimestamp'] . "</td>");
			echo ("<td>" . $serialsRow['serialLatestTimestamp'] . "</td>");
			echo ("</tr>");
		}
	} else { echo("Invalid permissions to access this page"); } 
} else { echo("You must be logged in to see this page"); }
?>
</table>
</div>
