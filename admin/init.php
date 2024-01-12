<?php 
//  PDO Connection with DataBase
	include 'ConnectDB.php';
	//Routes
	$temp = 'includes/temp/'; //templet Directory
	$css = 'layout/css/'; //css Dir
	$js = 'layout/js/'; //js Dir
	$lang = 'includes/lang/';  //lang Dir
	$func = 'includes/func/'; // Function Dir

    // incude the important files

    include $func . 'function.php';

	include $lang . 'english.php';

	include $temp . 'header.php';


	// include navbar in all page expext pages contain $noNavbar var

	if (!isset($noNavbar)) {
		// code...
	include $temp . 'navbar.php';
	};
 ?>