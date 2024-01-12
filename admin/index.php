<?php 
	session_start();
	$noNavbar = '';
	$pageTitle = 'Login';
	if (isset($_SESSION['Username'])) {
		// code...
		header('Location:dashboard.php');
	}
	include 'init.php';


	 // check if user coming fromm HTTP POST Request

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$hashpassword =sha1($password);

		// check if the user exist in Database

		$stmt = $con->prepare("SELECT UserID , Username , Password FROM users WHERE Username = ? and Password = ? and GroupID = 1 LIMIT 1 ");
		$stmt->execute(array($username , $hashpassword));
		$row = $stmt->fetch();
		$count = $stmt->rowCount();

		//if count > 0 mean the Database contain Record about this Username 
		if ($count > 0 ) {
			// code...
			$_SESSION['Username'] = $username; // Register session Name
			$_SESSION['ID'] = $row['UserID'];  // Register session ID
			header('Location:dashboard.php');  // Redirect TO Dashboard Page
			exit();
		}
	}
	 ?>
	<form class="login text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h4>Admin Login</h4>
		<input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
		<input class="form-control" type="password" name="pass" placeholder="Password">
		<input class="btn btn-primary btn-block submit" type="submit" value="Login">
	</form>
	<?php include $temp . 'footer.php' ?>
