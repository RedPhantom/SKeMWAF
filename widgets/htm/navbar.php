<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./?p=">Serial Key Managment System</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			 <li role="presentation"><a href="./?p=dashboard">Dashboard</a></li>
			<li role="presentation"><a href="./?p=lookup">Serial Key Lookup</a></li>
			<li role="presentation"><a href="./?p=gen">Generate New Serial Keys</a></li>
			<li role="presentation"><a href="./?p=getSerial">Get a Serial Key</a></li>
			<li role="presentation"><a href="./?p=submitSerial">Activate a Serial Key</a></li>
		  </ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<?php
				if (!sses_running())
					sses_start();
	
				// Perform the login	
	
				function isAppLoggedIn(){
					return isset($_SESSION['uid']) && isset($_SESSION['username']) && isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn']===true);
				}
				
				if (isAppLoggedIn()) {
					echo('<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user">&nbsp;</span>');
					echo("Welcome, " . $_SESSION['username'] . '! &nbsp; <span class="caret"></span>');
				} else {
					echo('<a href="./?p=login"><i class="fa fa-key">&nbsp;</i>');
					echo("Log in");
				}
			?>		
		<ul class="dropdown-menu">
			<li><a href="?p=profile">Profile Page</a></li>
            <li><a href="?p=register">Register an Account</a></li>
            <li><a href="?p=users">Account Managment</a></li>
            <li><a href="?p=serials">Serial Managment</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="./?p=logout">Log Out</a></li>
         </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
</nav>
