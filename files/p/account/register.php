<?php
if ( !isset($mysqli))
	include_once("./files/p/dbconnect.php");
	
// THIS PAGE REQUIRES PERMISSION LEVEL 2
if (isAppLoggedIn()) {
	if (checkPermission($_SESSION['username'], 2, $mysqli)) {
	if (isset($_POST['pwd']) && isset($_POST['confirmpwd'])) { // If the form has been submitted (to itself).
		
		// Confirm password check
		if($_POST['pwd'] != $_POST['confirmpwd']) {
			echo(make_message(0,"Password and password confirmation are not identical."));
		}
		
		if (!preg_match('/^[a-zA-Z0-9_]+$/', $_POST['user'])) {
			echo(make_message(0,"Username may only contain lowercase and uppercase letters, underscores and numerics."));
		}
		
		if(strlen($_POST['pwd']) < 8) {
			echo(make_message(0, "Password must contain at least 8 characters."));
		}
		
		if(!preg_match("#[0-9]+#", $_POST['pwd'])) {
			echo(make_message(0, "Password must contain numbers."));
		}

		if(!preg_match("#[a-z]+#", $_POST['pwd'])) {
			echo(make_message(0, "Passowrd must contain lowercase letters."));
		}


		if(!preg_match("#[A-Z]+#", $_POST['pwd'])) {
			echo(make_message(0, "Password must contain uppercase letters."));
			exit();
		}

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

		$ulogin = new uLogin('appLogin', 'appLoginFail');
		
					// Now, after permission is verified, we can create the user:
				if ( !$ulogin->CreateUser( $_POST['user'],  $_POST['pwd']) )
						echo '<div class="alert alert-danger" role="alert"><strong>Damn, Daniel!</strong> Something went wrong - the account could not be created!</div>';
					else
						echo '<div class="alert alert-success" role="alert"><strong>Niceeee! </strong>Account created. Go take a look at <a href="?p=users" class="alert-link">Account Managment</a>.</div>';
		} else {
?>


<center>
<div class="well" style="width:35%;">
<form action="./?p=register" 
	method="post" 
	onsubmit="return checkForm(this);"
	name="registration_form" class="form-horizontal" id="registration_form">
	<fieldset>

	<!-- Form Name -->
	<legend>Register</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-5 control-label" for="user">User Name</label>  
	  <div class="col-md-6">
	  <input id="user" name="user" class="form-control input-md" required="" type="text">
	  </div>
	</div>
	
	<!-- Password input-->
	<div class="form-group">
	  <label class="col-md-5 control-label" for="pwd">Password</label>
	  <div class="col-md-6">
		<input id="pwd" name="pwd" placeholder="" class="form-control input-md" required="" type="password">
	  </div>
	</div>

	<!-- Password input-->
	<div class="form-group">
	  <label class="col-md-5 control-label" for="confirmpwd">Confirm Password</label>  
	  <div class="col-md-6">
	  <input id="confirmpwd" name="confirmpwd" placeholder="" class="form-control input-md" required="" type="password">
	  </div>
	</div>
	

	  <input type="hidden" id="nonce" name="nonce" value="<?php echo ulNonce::Create('login');?>">


	<!-- Button -->
	<div class="form-group">
	  <div>
		<button class="btn btn-default">Register</button>
	  </div>
	</div>

	</fieldset>
</form></div></center>

<p>Return to the <a href="./?p=login">login page</a>.</p>
<?php }
} else { echo "Invalid permission"; } } else { echo($must_login); }
