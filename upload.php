<?php
	include "session.php";
	include "koneksi.php";
	$nama_file = $_FILES['gambar']['name'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	$fotobaru = date('dmYHis').$nama_file;
	$path = "images/".$fotobaru;

	if(move_uploaded_file($tmp_file, $path)){
		$query = "UPDATE dataprofile SET gnama = '$fotobaru' WHERE iduser = '$iduser'";
      		$sql = mysqli_query($conn, $query);
		header("location: profile.php");
	}
	else{
		echo "Not upload #".$_FILES["gambar"]["error"];
	}
?>
