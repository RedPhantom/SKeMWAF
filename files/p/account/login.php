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

	function appLoginFail($uid, $username, $ulogin){
		// Note, in case of a failed login, $uid, $username or both
		// might not be set (might be NULL).
		echo(make_message(0, "<strong>Login failed</strong>. Wrong credentials."));
	}
	
	$msg = '';
	
	$ulogin = new uLogin('appLogin', 'appLoginFail');
	
	// Perform the login:
	
	if (isset($_POST['nonce']) && ulNonce::Verify('login', $_POST['nonce'])){

			// This is the line where we actually try to authenticate against some kind
			// of user database. Note that depending on the auth backend, this function might
			// redirect the user to a different page, in which case it does not return.
			
			$ulogin->Authenticate($_POST['user'],  $_POST['pwd']);
			
			if ($ulogin->IsAuthSuccess()){
				echo(make_message(3, "<strong>Login Success</strong>. You logged in successfuly. Redirecting to dashboard..."));
				echo("<script>window.setTimeout(function() {
				window.location.href = './?p=dashboard';
				}, 5000);</script>");
			
			}
	} else
		$msg = 'invalid nonce';
		
	// Now we enable debugging output:
	ulLog::ShowDebugConsole();
	
?>
	
	
<center>
<div class="well" style="width:35%;">
<form method="POST" action="?p=login">
	<fieldset>

	<!-- Form Name -->
	<legend>Log In</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-5 control-label" for="user" style="margin-top: 10px;">User Name</label>  
	  <div class="col-md-6">
	  <input id="user" name="user" placeholder="" class="form-control input-md" required="" type="text" style="margin-bottom: 10px;">
		
	  </div>
	</div>

	<!-- Password input-->
	<div class="form-group">
	  <label class="col-md-5 control-label" for="pwd" style="margin-top: 10px;">Password</label>
	  <div class="col-md-6">
		<input id="pwd" name="pwd" placeholder="" class="form-control input-md" type="password">
	  </div>
	</div>
	
	<!-- Remember Me Input 
	<label class="col-md-4 control-label" for="XXXX">Remember Login?</label>
  <div class="col-md-4">
    <label class="checkbox-inline">
      <input name="XXXX" id="XXXX" value="1" type="checkbox">
      &nbsp;
    </label>
  </div>-->
    

	<input type="hidden" id="nonce" name="nonce" value="<?php echo ulNonce::Create('login');?>">

	<!-- Button -->
	<div class="form-group">
	  <div class="col-md-1">
		<button class="btn btn-default" onclick="formhash(this.form, this.form.password);" style="margin-top: 10px;">Log In</button>
	  </div>
	</div>

	</fieldset>

</form></div></center>
