<?php 
	include 'koneksi.php';	
	session_start();
	
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$fetch = mysqli_query($conn,"SELECT iduser FROM dataprofile WHERE username ='$user' AND password ='$pass'");
		if(mysqli_num_rows($fetch)>0)
		{
			$_SESSION['login_username'] = $user;
			header("location: profile.php");
		}
		else
		{
			header("location:loginuser.php");
		}
	}
?>
