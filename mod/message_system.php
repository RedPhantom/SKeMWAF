<?php
/* SUMMARY
* This module is managing the messages in the site. It uses the Bootstrap 3 Alerts with given output.
*
*/
// This module posts messages by priority.
/*
 * 0 - Critical Error
 * 1 - Warning
 * 2 - Info
 * 3 - Success
 */
 
 /**
 * make_message()
 This function returns a compiled HTML <div> tags to be echo'ed into the webpage to display a message.
 $messageType	Integer. 	Valid values are 0, 1, 2, 3. 0 - Critical Error; 1 - Warning; 2 - Info; 3 - Success.
 $messageText	String.		The text for the message to contain. HTML or simple text. Valid value: HTML that is valid inside a <div> tag.
 */
 function make_message($messageType, $messageText) {

	 if ($messageType == 0) {
		 return('<div class="alert alert-danger" role="alert">' . $messageText .'</div>');
	 }
	 
	 if ($messageType == 1) {
		 return('<div class="alert alert-danger" role="alert">' . $messageText .'</div>');
	 }
	 
	 if ($messageType == 2) {
		  return('<div class="alert alert-info" role="alert">' . $messageText .'</div>');
	 }
	 if ($messageType == 3) {
	
		 return('<div class="alert alert-success" role="alert">' . $messageText .'</div>');
	 }
 }
?>
