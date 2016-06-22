<?php

	function appLogin($uid, $username, $ulogin){
		$_SESSION['uid'] = $uid;
		$_SESSION['username'] = $username;
		$_SESSION['loggedIn'] = true;

		if (isset($_SESSION['appRememberMeRequested']) && ($_SESSION['appRememberMeRequested'] === true))
		{
			// Enable remember-me
			if ( !$ulogin->SetAutologin($username, true))
				echo "cannot enable autologin<br>";

			unset($_SESSION['appRememberMeRequested']);
		}
		else
		{
			// Disable remember-me
			if ( !$ulogin->SetAutologin($username, false))
				echo 'cannot disable autologin<br>';
		}
	}

	if (isAppLoggedIn()) 
		echo("You are currently logged in, <b>" . $_SESSION['username'] . '</b>.<br><a href="./?p=logout">Log out</a>.');
	else
		echo($must_login);
		
