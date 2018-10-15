<fieldset id="fieldset">
<legend id="legend"><font size="4" face="Tahoma" color ="#4169E1">List File</font></legend>
<?php
    $kd_admin   = $_SESSION['kd_admin'];
if ($kd_admin != null){
    
	
	?>
	<table border='0' width='100%'>
	<div id="ttext-link">
	<?php		
	
		$query  = "SELECT * FROM file order by kd_file asc";		
		$sql    = mysql_query($query);
		$jumlah = mysql_num_rows($sql);
	
	if($jumlah > 0){
		echo"<tr bgcolor='#4169E1'><th>Nama File</th><th>Password</th><th>Tanggal</th><th>Action</th></tr>";
		while($r=mysql_fetch_array($sql)){		
			echo"<tr bgcolor='whitesmoke' ><td align='left'>$r[nama_file]</td><td align='center'>$r[password]</td><td align='center'>$r[tanggal_file]</td><td align='center'><a href='hapus-fileadmin.php?kd_file=$r[kd_file]&file=$r[nama_file]'>Hapus</a></td></tr>";
		}
	
	}
	else{
			echo"<h1>Maaf Database Masih Kosong</h1>";
	}
?>
</div>
</table>
</fieldset>
<?php
	}else{    
		echo "<script>window.location='menuadmin.php'</script>";
}
?>