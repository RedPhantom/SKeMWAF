	<?php
	require_once('./files/p/ulogin/config/all.inc.php');
	require_once('./files/p/ulogin/main.inc.php');
	if (!sses_running())
	sses_start();
		
	//Login for this web application is handeled by: http://ulogin.sourceforge.net/usage.php uLogin 0.7
	$pageId = $_GET['p']; // Get the page ID from the URL and match it to an address from a dictionary.
	if (!isset($pageId) ) {
		$pageId = "";
	}
	
	if ($pageId == null) { // If the Page ID is null, set it to an empty string and display the homepage.
		$pageId = "";
	}
	
	include("./mod/ptitle.php"); // Page titles module.
	
	$pageTitle = getPageTitle($pageId);
	$pageHTitle = "Serial Managment System - " . $pageTitle; // Modify the text field to change the site name. $pageTitle is the name of the file displayed in the <title> header tag.
	$pageAddr  = getPageAddr($pageId);

	/* The "YOU MUST LOG IN" Message. */
	$must_login = make_message(0, 'You do not have permission to view this page. <a href="./?p=login">Log in</a>.');
	
	function checkPermission($_username, $_permission, $_mysqli) {
		$_username = stripslashes($_username);
		$_username = mysqli_escape_string($_mysqli, $_username);
		
		$_permission = stripslashes($_permission);
		$_permission = mysqli_escape_string($_mysqli, $_permission);
		
		$getPermQuery = "SELECT * FROM ul_logins WHERE username='$_username' AND permissions=$_permission";
		$permResult = $_mysqli->query($getPermQuery);
		
		switch (mysqli_num_rows($permResult)) {
			case 1:
				return true;
				break;
			default:
				return false;
				break;
		}
	}
	?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Serial Key Managment System">
    <meta name="author" content="MediQ">
    <link rel="icon" href="./media/favicon.ico">

    <title><?php echo($pageHTitle); ?></title>

    <!-- Bootstrap core CSS -->
    
    <link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/custom.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet" type="text/css">

	<script src="https://use.fontawesome.com/b09f8d34ae.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php 
        // Including the navbar on the top of the page.
		require("./widgets/htm/navbar.php"); 
    ?>
<div style="margin-top:75px;"></div>
<!--
    TODO: Add the film itself and the Bootstrap cells.      
-->
	
<div class="bright-background">
<?php 
		if (empty($pageAddr)){
			echo(make_message(0, "<strong>File Index Error:</strong>&nbsp;File does not exist in index."));
		} else {
			include($pageAddr); // Display the file.
		}
?>
</div>
<?php
		echo (file_get_contents("./widgets/htm/footer.htm")); //Display footer for copyright and legel info. 	
		if (isset($mysqli))	 // Close MySQL connection, if is set
		if (isset($mysqli))	 // Close MySQL connection, if is set
			$mysqli->close();	
	?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./widgets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    </body>
    </html>
