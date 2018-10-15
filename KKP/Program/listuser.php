<fieldset id="fieldset">
<legend id="legend"><font size="4" face="Tahoma" color ="#4169E1">List User</font></legend>
<?php
    $kd_admin   = $_SESSION['kd_admin'];
if ($kd_admin != null){
    $username   = $_SESSION['username'];
	
	?>
	<table border='0' width='100%'>
	<div id="ttext-link">
	<?php		
	
		$query  = "SELECT * FROM login order by kd_user asc";		
		$sql    = mysql_query($query);
		$jumlah = mysql_num_rows($sql);
	
	if($jumlah > 0){
		echo"<tr bgcolor='#4169E1'><th>Username</th><th>Password</th><th>Counter</th><th>Join_date</th><th>Action</th></tr>";
		while($r=mysql_fetch_array($sql)){		
			echo"<tr bgcolor='whitesmoke' align='center'><td>$r[username]</td><td>$r[password]</td><td>$r[counter]</td><td>$r[join_date]</td><td><a href='hapus-user.php?kd_user=$r[kd_user]'>Hapus</a></td></tr>";
		}
	
	}
	else{
			echo"<h1>Maaf User Anda Masih Kosong</h1>";
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