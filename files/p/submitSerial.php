<?php
	$serial = isset($_POST['serialKey']) ? $_POST['serialKey'] : '';
	if (empty($_POST['isReady'])) {	
?>
	
<form class="form-horizontal" method="POST" action="?p=submitSerial">
	<fieldset>

	<!-- Form Name -->
	<legend>Activate a Serial Key</legend>

	<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="serialKey">Serial Key</label>  
		  <div class="col-md-6">
		  <input id="serialKey" name="serialKey" placeholder="XXXXX-XXXXX-XXXXX-XXXXX" class="form-control input-md" required="" type="text" autocomplete="off">
		  <span class="help-block">The serial key you received in the E-mail.</span>  
		  </div>
		</div>
		<input type="hidden" name="isReady" value="ready">
		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="singlebutton"></label>
		  <div class="col-md-4">
			<button id="singlebutton" class="btn btn-default">Activate!</button>
		  </div>
		</div>

	</fieldset>
</form>
<?php
} else {
	include_once("dbconnect.php");
	$url = "http://localhost/~itay/files/p/validate.php";
	$data = array('serial' => $serial);
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);

	$context  = stream_context_create($options);
	$result   = file_get_contents($url, false, $context);

	switch ($result) {
		case "true" : echo make_message(3, "<strong>Activation successful.</strong> The serial key you've submitted has been registered and activated."); break;
		case "false": echo make_message(0, "<strong>Activation failed.</strong> Please check the key and try again. It might have registered if you refreshed the page more than once."); break;
	}
}
