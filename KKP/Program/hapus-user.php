<?php
include "koneksi.php";
$kd_user=$_GET['kd_user'];
mysql_query("delete from login where kd_user='$kd_user'");

	echo"<script type='text/javascript'>
		alert('user berhasil di hapus');
	</script>";
echo "<meta http-equiv='refresh' content='0; url=menuadmin.php?hal=listuser'>";
?>