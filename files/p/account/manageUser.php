<?php

// HEIGHEST permission level! (2)

require_once ('./files/p/dbconnect.php');
$ulogin = new uLogin('appLogin', 'appLoginFail');

if (isAppLoggedIn()) {
	if (checkPermission($_SESSION['username'], 2, $mysqli)) {

		// ################# REAL CODE STARTS FROM HERE ONLY #########################

		if (isset($_POST['action']) & isset($_POST['userid'])) {
			$action = $_POST['action'];
			$userId = $_POST['userid'];
			
			/* Supported Option:
			 * These options will only work on useres with permission 0 and 1.
			 * delete - delete the user.
			 */ 
			// Perform user actions
			switch($action) {
				case "delete":
					if(!$ulogin->DeleteUser($userId)) {
						echo('<div class="alert alert-danger" role="alert"><strong>Deletion failure.</strong> User could no be removed. It may not exist: try to press the "refresh" button to reload the users table.</div>');
					} else {
						echo('<div class="alert alert-danger" role="alert"><strong>User deleted.</strong> User (ID ' . $userId . 
						'was removed.</div>');
					}
					break;
				default:
					break;
			}
		}

?>
				
				<h2>List of Users</h2>
				<div class="btn-group-horizontal center-block" style="width: 100%;" role="group" aria-label="...">
					<a class="btn btn-link center-block" style="width: 20%" href="?p=register"><i class="fa fa-plus">&nbsp;</i>Add a New User</a>
					<a class="btn btn-link center-block" style="width: 20%" href="?p=users"><i class="fa fa-refresh">&nbsp;</i>Reload</a>
				</div>
				<div class="">
					<table class="table table-striped table-hover " style="margin-top: 10px;">
						<tr>
							<td><strong>#</strong></td>
							<td><strong>User Name</strong></td>
							<td><strong>Date Created</strong></td>
							<td><strong>Last Login</strong></td>
							<td><strong>Permission</strong></td>
							<td><strong>Action</strong></td>
						</tr>
						<?php
		$getAllUsersQuery = "SELECT id,username,date_created,last_login,permissions FROM ul_logins";
		$allUsersResult = $mysqli->query($getAllUsersQuery);
		while ($usersRow = $allUsersResult->fetch_assoc()) { // For each user, create a row and insert data accordingly.

			// Contruct the table row

			echo ("<tr>");
			echo ("<td>" . $usersRow['id'] . "</td>");
			echo ("<td>" . $usersRow['username'] . "</td>");
			echo ("<td>" . $usersRow['date_created'] . "</td>");
			echo ("<td>" . $usersRow['last_login'] . "</td>");
			echo ("<td>" . $usersRow['permissions'] . "</td>");
			if( $usersRow['permissions'] <= 1) { // Only allow editing for users with low & medium permissions.
			echo ('<td>
					<form action="./?p=users" method="POST" style="margin-top: -6px;">
						<input type="hidden" name="userid" value="' . $usersRow['id'] . '"/>
						<label class="radio-inline"><input type="radio" name="action" value="delete">Delete</label>
						<input type="submit" value="OK" class="btn btn-link"></input>
					</form>
					</td>');
			} else {
				echo('<td><abbr title="Users with permission level 2 may not be modified through the Web-Interface."><i class="fa fa-ban"></i></abbr></td>');
			}
			echo ("</tr>");
		}
?>
			</table>
				</div>
				<?php
	}
	else {
		echo "permission is too low!";
	}
}
else {
	echo ($must_login);
}
