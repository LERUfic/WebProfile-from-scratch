<?php
	include "koneksi.php";
	$nama_file = $_FILES['gambar']['name'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	$fotobaru = date('dmYHis').$nama_file;
	$path = "images/".$fotobaru;

	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$dd = $_POST['dd'];
	$mm = $_POST['mm'];
	$yy = $_POST['yy'];
	$asal = $_POST['asal'];
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];

	if(move_uploaded_file($tmp_file, $path)){
		$query = "INSERT INTO dataprofile (username, nama, password, jenis_kelamin, dd, mm, yy, asal, email, nohp, gnama) VALUES ('$username','$nama', '$password', '$jenis_kelamin', '$dd', '$mm', '$yy', '$asal', '$email', '$nohp', '$fotobaru')";
      		$sql = mysqli_query($conn, $query);
		header("location: logout.php");
	}
	else{
		echo "Not upload #".$_FILES["gambar"]["error"];
	}
?>
