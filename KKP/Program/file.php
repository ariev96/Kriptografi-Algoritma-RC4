<fieldset id="fieldset">
<legend id="legend"><font size="4" face="Tahoma" color ="#4169E1">List File</font></legend>
<?php
    $kd_user   = $_SESSION['kd_user'];
if ($kd_user != null){
    	
	?>
	<table border='0' width='100%'>
	<div id="ttext-link">
	<?php

		$query = "SELECT * FROM file where kd_user='$kd_user' order by kd_file asc";		
		$sql = mysql_query($query);
		$jumlah=mysql_num_rows($sql);
		
	if($jumlah > 0){
		echo"<tr bgcolor='#4169E1'><th>Nama File</th><th>Tanggal File</th><th>Action</th></tr>";
		while($r=mysql_fetch_array($sql)){
		echo "
		<tr bgcolor='whitesmoke' align='center'><td><a href='download.php?download_file=$r[nama_file]' >$r[nama_file]</a></td><td>$r[tanggal_file]</td><td><a href='hapus-file.php?kd_file=$r[kd_file]&file=$r[nama_file]'>Hapus</a></td></tr>";
		}
	
	}else{
			echo"<h1>Maaf Histori File Anda Masih Kosong</h1>";
	}
?>
</div>
</table>
</fieldset>
<?php
}
else{
     echo "<script>window.location='index.php'</script>";
}
?>