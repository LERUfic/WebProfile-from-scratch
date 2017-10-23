<?php
	session_start();
	include 'koneksi.php';
	$iduser = $_SESSION['iduser'];
	$login_session = $_POST['username'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$dd = $_POST['dd'];
	$mm = $_POST['mm'];
	$yy = $_POST['yy'];
	$asal = $_POST['asal'];
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];
	
	$query = "UPDATE dataprofile SET nama='$nama', password='$password', jenis_kelamin='$jenis_kelamin', dd='$dd', mm='$mm', yy='$yy', asal='$asal', email='$email', nohp='$nohp' WHERE iduser = '$iduser'";
 	$sql = mysqli_query($conn, $query);
	header("location: profile.php");

?>
