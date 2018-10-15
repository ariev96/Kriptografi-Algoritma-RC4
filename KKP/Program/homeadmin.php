<?php

include("koneksi.php");
    $kd_admin   = $_SESSION['kd_admin'];
if ($kd_admin != null){
    $username   = $_SESSION['username'];
	
	?>
<center>
<h2><font color="#000">Selamat Datang </font><font color="#00f" size="5px"> <?php echo"$username"; ?> </font></h3>

<img src="images/logo-ubl.png" height="325px" width="605px"></center>
<?php
	}
	else{

      echo "<script>window.location='index.php'</script>";
		
}
?>