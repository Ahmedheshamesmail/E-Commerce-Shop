<?php 
	 // create a function to print the page title which page countain  $pageTitle 
	 function getTitle()
	 {
	 	// code...

	 	global $pageTitle;
	 	if (isset($pageTitle)) {
	 		// code...
	 		echo $pageTitle;
	 	}else{
	 		echo 'Defualt';
	 	}
	 }
 ?>