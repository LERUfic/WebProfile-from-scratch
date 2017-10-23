<?php
	session_start();
	include 'koneksi.php';
	$iduser = $_SESSION['iduser'];
	$query = "SELECT * FROM dataprofile WHERE iduser='$iduser'";
	$sql = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($sql);

	if(is_file("images/".$row['gname'])){
		unlink("images/".$row['gname']);
	}
	
	$query2 = "DELETE FROM dataprofile WHERE iduser='$iduser'";
	$sql2 = mysqli_query($conn, $query2);
	
	if($sql2){
		header("location: logout.php");
	}
?>
