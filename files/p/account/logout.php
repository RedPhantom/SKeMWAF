<?php
	
	function appLogout(){
  // When a user explicitly logs out you'll definetely want to disable
  // autologin for the same user. For demonstration purposes,
  // we don't do that here so that the autologin function remains
  // easy to test.
  //$ulogin->SetAutologin($_SESSION['username'], false);

	unset($_SESSION['uid']);
	unset($_SESSION['username']);
	unset($_SESSION['loggedIn']);
	
	}
	
	if (isAppLoggedIn()){
		// Logout
		appLogout();
		echo(make_message(3, "<strong>Successfuly logged out</strong>. Your log in session in the application has ended."));
		
		// Redirect the user to homepage after logging out:
		echo("<script>window.setTimeout(function() {
			window.location.href = './?p=';
			}, 5000);</script>");
	} else {
		echo(make_message(0, "Invalid request."));
	}
