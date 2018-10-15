<?php
include "koneksi.php";
$kd_file=$_GET['kd_file'];
$nama_file = $_GET['file'];

	if(file_exists('upload/'.$nama_file))
		unlink('upload/'.$nama_file);
		
	mysql_query("delete from file where kd_file='$kd_file'");

	echo"<script type='text/javascript'>
		alert('Data file berhasil di hapus');
	</script>";
	echo "<meta http-equiv='refresh' content='0; url=listfileadmin.php?hal=listfileadmin'>";
?>