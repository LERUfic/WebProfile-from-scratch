<?php
	include 'session.php';
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
			<p><i>Kenali Dirimu di Sini~</i></p>
		</div>
		<div class="menu">
			<ul>
				<li><a href="ubahpp.php">Upload Foto</a></li>
				<li><a href="editdata.php">Edit Data</a></li>
				<li><a href="logout.php">Log Out</a></li>	
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				<div class="tabing2">
					<br><b>Selamat Datang</b><br><br>
				</div>
			</div>

			<div class="content">
				<div class="tabing">
					<br><b>Your Web Profile</b><br><br>
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><?php echo $nama;?></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td><?php echo $jenis_kelamin;?></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>Tanggal Lahir (d/m/y)</td>
							<td>:</td>
							<td><?php echo $dd ;?>/<?php echo $mm ;?>/<?php echo $yy ;?></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>Asal Kota</td>
							<td>:</td>
							<td><?php echo $asal;?></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><?php echo $email;?></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>No HP</td>
							<td>:</td>
							<td><?php echo $nohp;?></td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>Foto</td>
							<td>:</td>
							<td><?php echo "<img src='images/".$foto."' width='100' height='100'>"; ?></td>
						</tr>
					</table>
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
