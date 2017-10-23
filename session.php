<?php
	include 'koneksi.php';
	session_start();
	$check = $_SESSION['login_username'];
	$session = mysqli_query($conn,"SELECT * FROM dataprofile WHERE username = '$check'");
	$row = mysqli_fetch_array($session);
	$iduser = $row['iduser'];
	$login_session = $row['username'];
	$nama = $row['nama'];
	$jenis_kelamin = $row['jenis_kelamin'];
	$dd = $row['dd'];
	$mm = $row['mm'];
	$yy = $row['yy'];
	$asal = $row['asal'];
	$email = $row['email'];
	$nohp = $row['nohp'];
	$foto = $row['gnama'];
	if(!isset($login_session))
	{
		header("location:loginuser.php");
	}
?>
