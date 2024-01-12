<?php
	session_start();
	if (isset($_SESSION['Username'])) {
		// code...
		$pageTitle = 'Dashboard';
		include 'init.php';

	} else {
		header('Location: index.php');
		exit();
	}
 	include $temp . 'footer.php';
