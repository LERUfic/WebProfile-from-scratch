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
			height: 585px;
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
			height: 350px;
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
			width: 100%;
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

		.tombol{
			background:#7f8c8d;
			color:white;
		  	border-top:0;
		  	border-left:0;
		  	border-right:0;
		  	border-bottom:5px solid #bdc3c7;
		  	padding:10px 20px;
		  	text-decoration:none;
		  	font-family:sans-serif;
		  	font-size:11pt;
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
			<center><h1>PORTAL WEB PROFILE</h1></center>
		</div>
		<div class="badan">			

			<div class="content">
				<div class="tabing">
					<br>
					<br>
					<br>
					<br>
					<center>
						<form action="login.php" method="POST">
							<i>Username:</i><br>
							<input type="text" name="username" id="userid" required="required"/><br>
							<i>Password:</i><br>
							<input type="password" name="password" id="passid" required="required"/><br><br>
							<input type="submit" name="submit" id ="submit" value="Log In">
						</form>
<br><a href="index.html"><button>Cancel</button></a>
					</center>
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
