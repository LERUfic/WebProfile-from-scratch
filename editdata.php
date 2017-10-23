<?php
	include 'session.php';
	session_start();
	$_SESSION['iduser'] = $iduser;
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
				<li><a href="ubahpp.php">Upload Foto</a></li>
				<li><a href="logout.php">Log Out</a></li>	
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				<div class="tabing2">
					<br><b>Edit Data</b><br><br>
				</div>
			</div>

			<div class="content">
				<div class="tabing">
					<br><b>Upload foto</b><br><br>
						<form method="POST" action="ubahedit.php">
							<table>
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td><input type="text" name="nama" value="<?php echo $nama;?>" required="required"/></td>
								</tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr>
									<td>Username</td>
									<td>:</td>
									<td><?php echo $login_session;?></td>
								</tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr>
									<td>Password</td>
									<td>:</td>
									<td><input type="password" name="password" required="required"/></td>
								</tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>:</td>
									<td>
										<?php if($jenis_kelamin == "laki-laki"){
											echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked /> Laki - Laki";
											echo "<input type='radio' name='jenis_kelamin' value='perempuan' /> Perempuan";
										}
										else{
											echo "<input type='radio' name='jenis_kelamin' value='laki-laki'/> Laki - Laki";
											echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked /> Perempuan";
										}?>
									</td>
								</tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td>:</td>
									<td>
										Day
										<select name="dd">
											<option value="01" <?php if($dd == "1"){echo("selected");}?>>01</option>
			    								<option value="02" <?php if($dd == "2"){echo("selected");}?>>02</option>
			    								<option value="03" <?php if($dd == "3"){echo("selected");}?>>03</option>
			    								<option value="04" <?php if($dd == "4"){echo("selected");}?>>04</option>
			    								<option value="05" <?php if($dd == "5"){echo("selected");}?>>05</option>
			    								<option value="06" <?php if($dd == "6"){echo("selected");}?>>06</option>
			    								<option value="07" <?php if($dd == "7"){echo("selected");}?>>07</option>
			    								<option value="08" <?php if($dd == "8"){echo("selected");}?>>08</option>
			    								<option value="09" <?php if($dd == "9"){echo("selected");}?>>09</option>
			    								<option value="10" <?php if($dd == "10"){echo("selected");}?>>10</option>
			    								<option value="11" <?php if($dd == "11"){echo("selected");}?>>11</option>
			    								<option value="12" <?php if($dd == "12"){echo("selected");}?>>12</option>
			    								<option value="13" <?php if($dd == "13"){echo("selected");}?>>13</option>
			    								<option value="14" <?php if($dd == "14"){echo("selected");}?>>14</option>
			    								<option value="15" <?php if($dd == "15"){echo("selected");}?>>15</option>
			    								<option value="16" <?php if($dd == "16"){echo("selected");}?>>16</option>
			    								<option value="17" <?php if($dd == "17"){echo("selected");}?>>17</option>
			    								<option value="18" <?php if($dd == "18"){echo("selected");}?>>18</option>
			    								<option value="19" <?php if($dd == "19"){echo("selected");}?>>19</option>
			    								<option value="20" <?php if($dd == "20"){echo("selected");}?>>20</option>
			    								<option value="21" <?php if($dd == "21"){echo("selected");}?>>21</option>
			    								<option value="22" <?php if($dd == "22"){echo("selected");}?>>22</option>
			    								<option value="23" <?php if($dd == "23"){echo("selected");}?>>23</option>
			    								<option value="24" <?php if($dd == "24"){echo("selected");}?>>24</option>
			    								<option value="25" <?php if($dd == "25"){echo("selected");}?>>25</option>
			    								<option value="26" <?php if($dd == "26"){echo("selected");}?>>26</option>
			    								<option value="27" <?php if($dd == "27"){echo("selected");}?>>27</option>
			    								<option value="28" <?php if($dd == "28"){echo("selected");}?>>28</option>
			    								<option value="29" <?php if($dd == "29"){echo("selected");}?>>29</option>
			    								<option value="30" <?php if($dd == "30"){echo("selected");}?>>30</option>
		    									<option value="31" <?php if($dd == "31"){echo("selected");}?>>31</option>
	 									</select>
	 								
	 									Month
										<select name="mm">
											<option value="01" <?php if($mm == "1"){echo("selected");}?>>01</option>
			    								<option value="02" <?php if($mm == "2"){echo("selected");}?>>02</option>
			    								<option value="03" <?php if($mm == "3"){echo("selected");}?>>03</option>
			    								<option value="04" <?php if($mm == "4"){echo("selected");}?>>04</option>
			    								<option value="05" <?php if($mm == "5"){echo("selected");}?>>05</option>
			    								<option value="06" <?php if($mm == "6"){echo("selected");}?>>06</option>
			    								<option value="07" <?php if($mm == "7"){echo("selected");}?>>07</option>
			    								<option value="08" <?php if($mm == "8"){echo("selected");}?>>08</option>
			    								<option value="09" <?php if($mm == "9"){echo("selected");}?>>09</option>
			    								<option value="10" <?php if($mm == "10"){echo("selected");}?>>10</option>
			    								<option value="11" <?php if($mm == "11"){echo("selected");}?>>11</option>
			    								<option value="12" <?php if($mm == "12"){echo("selected");}?>>12</option>
	 									</select>
	
	 									Year
										<select name="yy">
											<option value="1991" <?php if($yy == "1991"){echo("selected");}?>>1991</option>
		    									<option value="1992" <?php if($yy == "1992"){echo("selected");}?>>1992</option>
		    									<option value="1993" <?php if($yy == "1993"){echo("selected");}?>>1993</option>
			    								<option value="1994" <?php if($yy == "1994"){echo("selected");}?>>1994</option>
			    								<option value="1995" <?php if($yy == "1995"){echo("selected");}?>>1995</option>
			    								<option value="1996" <?php if($yy == "1996"){echo("selected");}?>>1996</option>
			    								<option value="1997" <?php if($yy == "1997"){echo("selected");}?>>1997</option>
			    								<option value="1998" <?php if($yy == "1998"){echo("selected");}?>>1998</option>
			    								<option value="1999" <?php if($yy == "1999"){echo("selected");}?>>1999</option>
		    									<option value="2000" <?php if($yy == "2000"){echo("selected");}?>>2000</option>
	 									</select>
	 								</td>
								</tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr>
									<td>Asal Kota</td>
									<td>:</td>
									<td><input type="text" name="asal" value="<?php echo $asal;?>" required="required"/></td>
								</tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td><input type="text" name="email" value="<?php echo $email;?>" required="required"/></td>
								</tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr>
									<td>No HP</td>
									<td>:</td>
									<td><input type="text" name="nohp" value="<?php echo $nohp;?>" required="required"/></td>
								</tr>
							</table>
						<br><input type="submit" value="Update"/>
					</form>
					<br><a href="delete.php"><button>Delete Account</button></a>
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
