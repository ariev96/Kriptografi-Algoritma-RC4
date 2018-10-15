<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Security Apps</title>
	<link rel="stylesheet" href="css/css.css" type="text/css">
</head>
<body>
	<div id="background">
<div id="page">
<div id="header">
			<?php include "main2.php"; ?>
			<div id="head">
			<div id="logo-h"></div>
			</div>
			<div id="contents">
					<div class="body">

					<?php
					
							if(isset($_GET['hal'])) {
							$hal = $_GET['hal'];
							} else {
								$hal = "home";
							}
							switch ($hal) {
								case	'login'			: include "login.php"; break;
								case	'register'		: include "register.php"; break;
								case	'admin'			: include "loginadmin.php"; break;
								default 				: include "home2.php";
							}
						
					?>
					</div>
			</div>
			<div id="footer">
				<p>
					<font color=white><b>PT.Datasistem Global Teknologi &copy 2017 - Universitas Budi Luhur</b></font>
				</p>
			</div>
	</div>
	
</body>
</html>