<?php
session_start();
include("koneksi.php");
    $kd_admin   = $_SESSION['kd_admin'];
if ($kd_admin != null){	
?>
<!DOCTYPE HTML>
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
			<?php include "mainadmin.php"; ?>
			<div id="head">
			<div id="logo-h"></div>
			</div>
			<div id="contents">
					<div class="body">

					<?php
					
							if(isset($_GET['hal'])) {
								$hal = $_GET['hal'];
							} 
							else {
								$hal = "home";
							}
							switch ($hal) {
								case	'listuser'			: include "listuser.php"; break;

								case	'listfileadmin'	    : include "listfileadmin.php"; break;								
								
								case    'reset'				: include "gantipass.php"; break;
								
								case	'help-admin'		: include "help-admin.php"; break;								
								
								case	'about-admin'		: include "about-admin.php"; break;								
								
								
								default : include "homeadmin.php";
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
<?php
	}
	else{
    
    echo "<script>window.location='index.php'</script>";
}
?>