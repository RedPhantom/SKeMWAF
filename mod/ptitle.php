<?php
/* This file is critical to the site and handels the searching and analysis of the data from files.list.
It also uses message_system.php to output error in case a file was not found.
*/


include("./mod/message_system.php");

$dataFileAddr = "./mod/files.list"; //all paths are from index.php. (These modules are loaded and executed from index.php)
$data = file($dataFileAddr);


/**
 * This function gets the page id from the navigation parameter, for example, and just uses plain simple findArgInDatafile to receive the title of the file.
 * 
 * @param String $pid 
 * 
 * @return String
 */
function getPageTitle($pid) {
	$pageTitle = findArgInDatafile(2,$pid);
	return ($pageTitle);	
}


/**
 * This function gets the page id from the navigation parameter, for example, and just uses plain simple findArgInDatafile to receive the address of the file.
 * 
 * @param String $pid 
 * 
 * @return String
 */
function getPageAddr($pid) {
	$pageAddr = findArgInDatafile(1,$pid);
	return ($pageAddr);
}


/**
 * This function returns the contents of an argument in a curtain file.
 * 
 * @param Integer $argnum The number of the argument to be searched for. The first argument (file id) is 0.
 * @param String $pid The page id, the first argument that identifies the file.
 * 
 * @return String
 */
function findArgInDatafile($argnum, $pid) {
	
	global $data; //access line x in data as: $data[x]
	
	$current = 0;
	$stop = count($data);
	
	while ($current <= $stop) {
		
		$line = explode(",",$data[$current]); //This line will throw a "Notice" error if an empty line exists in files.list.
		
		if ($pid == $line[0]) {
			return $line[$argnum];
		}
		$current += 1;
	}	
}

?>
