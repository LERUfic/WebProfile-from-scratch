<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>MY PROFILE</title>
	<style type="text/css">
		.wrap{
			background: #34495e;
			width: 900px;
			margin: 10px auto;
		}

		.wrap .header{
			background:#bfc9ca;
			padding: 2px 10px;
		}

		.wrap .menu{
			background: #979a9a;
		}

		.wrap .menu ul{
			padding: 0;
			margin: 0;
			background: #979a9a;
			overflow: hidden;
		}

		.wrap .menu ul li{
			float: left;
			list-style-type: none;
			padding: 10px;
		}

		.clear{
			clear: both;
		}

		.badan{
			height: 450px;
		}

		.wrap .badan .sidebar{
			background:  #cacfd2;
			float: left;	
			width: 25%;
			height: 100%;
		}

		.wrap .badan .content{
			background: #ecf0f1;
			float: left;
			height: 100%;
			width: 75%;
		}

		.wrap .badan .content .tabing{
			padding: 10px;
		}

		.wrap .badan .sidebar .tabing2{
			padding: 10px;
		}

		.wrap .footer{
			width: 100%;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="header">			
			<h1>WEB PROFILE</h1>
			<p>Kenali Dirimu di Sini~</p>
		</div>
		<div class="menu">
			<ul>
				<li><a href="profile.php">My Profile</a></li>
				<li><a href="editdata.php">Edit Data</a></li>
				<li><a href="logout.php">Log Out</a></li>	
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				<div class="tabing2">
					<br><b>Mengganti Foto Profile</b><br><br>
				</div>
			</div>

			<div class="content">
				<div class="tabing">
					<br><b>Upload foto</b><br><br>
					<form method="POST" enctype="multipart/form-data" action="upload.php">
						<input type="file" name="gambar">
						<input type="submit" value="Upload">
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			Tugas Camin AJK by Satria 056
		</div>
	</div>
</body>
</html>
