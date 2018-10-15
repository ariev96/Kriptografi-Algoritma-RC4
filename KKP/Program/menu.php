<?php
session_start();
include("koneksi.php");
    $kd_user   = $_SESSION['kd_user'];
if ($kd_user != null){
?>
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
			<?php include "main.php"; ?>
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
								case	'enkrip'			: include "enkrip.php"; break;
								case	'dekrip'			: include "dekrip.php"; break;
								case	'prosesenkrip'		: include "prosesenkrip.php"; break;
								case	'prosesdekrip'		: include "prosesdekrip.php"; break;
								case	'help'				: include "help.php"; break;
								case    'about'				: include "about.php"; break;
								case    'user'				: include "user.php"; break;
								case    'file'				: include "file.php"; break;
								
								default : include "home.php";
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