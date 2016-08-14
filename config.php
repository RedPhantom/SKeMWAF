<?php

/* 
  This file was added and implemented in version 0.9.2.
  See the changelog and readme for more information.
  In order to set the configuration data, only modify values
  as following:
  
  define("DB_HOST", "localhost");
  
  If you want to modify the value of the property "DB_HOST",
  you must change the text inside the quotation marks to suit
  your needs:
   
  define("DB_HOST", "192.12.5.73");
  
  DO NOT change property names or any other code.
  
*/

define("HOST", "localhost");     	// The host you want to connect to.
define("USER", "root");   			// The user with required permissions to run the application. Doesn't have to be a root user.
define("PASSWORD", "2208351");   	// The password for said user. 
define("DATABASE", "SerialVal"); 	// The name of the database in the server.	

define("PAGE_TITLE_PREFIX", "Serial Managment System - "); // The text to be infront of the individual page name in the <title> of the page.

define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!
/* If you run this for production, you MUST under any case change the
 SECURE property to TRUE, no quote marks. If you plan to install
 the application for development ONLY, it is safe to set the value
 to TRUE.
*/
