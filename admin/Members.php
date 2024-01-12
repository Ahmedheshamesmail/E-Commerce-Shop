<?php 
	/*
	===========================================================================================
	==create members page To Manage member ----> you can Add | Edit | Delete Members From Here 
	===========================================================================================
	*/


		session_start();
	if (isset($_SESSION['Username'])) {
		// code...
		$pageTitle = 'Members';
		include 'init.php';

		$do = isset($_GET['do']) ? $_GET['do'] :'Manage';

		// Start Manage Page

		if ($do == 'Manage') {

			// Manage....
			echo 'manage';

		}elseif ($do == 'Edit') { //Edit Page 
			$userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
			
			$stmt = $con->prepare('SELECT * FROM users WHERE UserID = ? LIMIT 1');
			$stmt->execute(array($userid));
			$row = $stmt->fetch();
			$count = $stmt->rowCount();

			if ($count > 0 ) {	// code...?>
				<h1 class=" text-center">Edit Member</h1>
				<div class="container">
				<form class="form-horizontal" action="?do=Update" method="POST">
					<input type="hidden" name="userid" value="<?php echo $userid ?>">
					<!-- ================================================================================== -->
											<!-- Start Username Faild -->
					<!-- ================================================================================== -->
									<div class="edit form-group row form-group-lg" >
										<label class="col-sm-2 col-md-2 control-label"  for="username">UserName</label>
										<div class="col-sm-10 col-md-4">
											<input type="text" name="username" class="form-control" autocomplete="off" id="username" value="<?php echo $row['Username'] ?>">
										</div>
									 </div> 
					<!-- ================================================================================== -->
								           <!-- End Username Faild -->
					<!-- ================================================================================== -->
											<!-- Start Password Faild -->
					<!-- ================================================================================== -->
										<div class="edit form-group row form-group-lg" > 
										<label class="col-sm-2 control-label" for="password">Password</label>
										<div class="col-sm-10 col-md-4">
											<input type="hidden" name="oldPassword" value="<?php echo $row['Password'] ?>" >
											<input type="password" name="newPassword" class="form-control" autocomplete="new-password" id="password" value="" placeholder="Reset Password If You Need">
										</div>
									</div>
					<!-- ================================================================================== -->
								           <!-- End Password Faild -->
					<!-- ================================================================================== -->
											<!-- Start Email Faild -->
					<!-- ================================================================================== -->
									<div class="edit form-group row form-group-lg" >
										<label class="col-sm-2 control-label" for="email">Email</label>
										<div class="col-sm-10 col-md-4">
											<input type="email" name="Email" class="form-control" autocomplete="off" id="email" value="<?php echo $row['Email'] ?>">
										</div>
									 </div> 
					<!-- ================================================================================== -->
								           <!-- End Email Faild -->
					<!-- ================================================================================== -->
											<!-- Start Full Name Faild -->
					<!-- ================================================================================== -->
									 <div class="edit form-group row form-group-lg" > 
										<label class="col-sm-2 control-label" for="full-name">Full Name</label>
										<div class="col-sm-10 col-md-4">
											<input type="text" name="Full_Name" class="form-control" autocomplete="off" id="full-name" value="<?php echo $row['FullName'] ?>">
										</div>
									</div>
									<br />
					<!-- ================================================================================== -->
								           <!-- End Full Name Faild -->
					<!-- ================================================================================== -->
											<!-- Start Save Faild -->
					<!-- ================================================================================== -->
									<div class="edit form-group row form-group-lg" >
										<label class="col-sm-2" for="submit"></label>
										<div class="col-sm-6  col-md-4">
											<input type="submit" name="submit" class="form-control btn btn-primary" id="submit">
										</div>
										<label class="col-sm-4" for="submit"></label>
									</div>
					<!-- ================================================================================== -->
								           <!-- End Save Faild -->
					<!-- ================================================================================== -->
				</form>
				</div>
		<?php
			}else {
				echo 'There is No Such ID';
			}	
		}elseif ($do == 'Update') { //Update Page
			// code...
			echo '<h1 class=" text-center">Update Member</h1>'; 
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Get var From Form
				$id = $_POST['userid'];
				$username = $_POST['username'];
				$email = $_POST['Email'];
				$full_name = $_POST['Full_Name'];
				
				// New Password Trick
				$pass = empty($_POST['newPassword']) ? $_POST['oldPassword'] : sha1($_POST['newPassword']) ;
				
				//Update The DataBase With Thos Info

				$stmt = $con->prepare("UPDATE users SET Username = ? , Email = ? , FullName = ? , Password = ? WHERE UserID = ?");
				$stmt->execute(array( $username , $email , $full_name , $pass , $id ));

				//Echo Success Message 
				echo $stmt->rowCount() . ' Record Update';  

			}else {
				echo ' you can not Browss This Page Directly ';
			}
		}


		include $temp . 'footer.php';

	} else {

		header('Location: index.php');

		exit();
	}
 

 ?>