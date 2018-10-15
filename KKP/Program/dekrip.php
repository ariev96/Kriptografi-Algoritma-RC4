<?php
    $kd_user   = $_SESSION['kd_user'];
if ($kd_user != null){
    $username   = $_SESSION['username'];
	
?>
<fieldset id="fieldset">
<legend id="legend"><font size="4" face="Tahoma" color ="#4169E1">Dekripsi File</font></legend>
	<form method="post" action="?hal=prosesdekrip" name="Input File" enctype="multipart/form-data">
		<br>
		Pilih File &nbsp;&nbsp;&nbsp; : <input name="file" type="file">
		<br><br>
		Password &nbsp;&nbsp;&nbsp;: 
		<input maxlength="16" size="16" name="katakunci" type="password"><br><br>
		<br>
		<button class="tombol" value="Enkripsi File" name="enkripsi" type="submit"><strong>Dekrip</strong></button>
	</form><br> 
    </fieldset>
	<?php
	}
	else{
    
    echo "<script>window.location='index.php'</script>";
}
	?>