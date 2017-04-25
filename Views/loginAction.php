<?php
session_start();

require_once './DB/DbConnection.php';

// checking the user

if(isset($_POST['login'])){

	$email = mysqli_real_escape_string($con,$_POST['email']);

	$pass = mysqli_real_escape_string($con,$_POST['pass']);

	//search student

	$sel_std = "select * from student_tbl where email='$email' AND pass='$pass'";

	$run_std = mysqli_query($con, $sel_std);

	$check_std = mysqli_num_rows($run_std);

	//search teacher
	
	$sel_t = "select * from teacher_tbl where email='$email' AND pass='$pass'";

	$run_t = mysqli_query($con, $sel_t);

	$check_t = mysqli_num_rows($run_t);

	//search subject Professional

	$sel_pro = "select * from pro_tbl where email='$email' AND pass='$pass'";

	$run_pro = mysqli_query($con, $sel_pro);

	$check_pro = mysqli_num_rows($run_pro);

	//search Admin

	$sel_admin = "select * from admin_tbl where email='$email' AND pass='$pass'";

	$run_admin = mysqli_query($con, $sel_admin);

	$check_admin = mysqli_num_rows($run_admin);

	//check student

	if($check_std>0){

		$_SESSION['user_email']=$email;

		echo "<script>window.open('StudentEditProfile.php','_self')</script>";


	}

	//check teacher

	elseif ($check_t>0) {
		$_SESSION['user_email']=$email;

		echo "<script>window.open('TeacherEditProfile.php','_self')</script>";
		
	}

	//check pro

	elseif ($check_pro>0) {
		$_SESSION['user_email']=$email;

		echo "<script>window.open('ProEditProfile.php','_self')</script>";
		
	}

	//check admin

	elseif ($check_admin>0) {
		$_SESSION['user_email']=$email;

		echo "<script>window.open('AdminEditProfile.php','_self')</script>";
		
	}

	else {

		echo "<script>alert('Email or password is not correct, try again!')</script>";
		echo "<script>window.location.href = 'index.php' </script>";

	}

}
$conn->close();
?>