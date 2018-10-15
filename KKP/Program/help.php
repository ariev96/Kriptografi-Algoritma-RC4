<?php
    $kd_user   = $_SESSION['kd_user'];
if ($kd_user != null){
    $username   = $_SESSION['username'];
	
?>
<fieldset id="fieldset">
<legend id="legend"><font size="4" face="Tahoma" color ="#4169E1">Help</font></legend>
<font size="4">
<pre>
<b>1. Langkah Menu Enkrip File :</b>
- Pilih Menu Enkripsi pada Form Menu Utama.
- Pilih File pdf, doc, docx, xls, xlsx atau file txt yang akan di enkripsi.
- Masukan Password.
- Klik tombol Enkrip File.

<b>2. Langkah Menu Dekrip File :</b>
- Pilih Menu Dekripsi pada Form Menu.
- Pilih File Hasil Enkripsi yang akan di didekripsi.
- Masukan Password.
- Klik tombol Dekrip File.


<b>Note:</b> Silahkan hubungi admin bila terjadi masalah kehilangan password akun atau 
      password dekripsi file.
<b>Email Admin: ...</b>
</pre>
</font>
</fieldset>
<?php
	}else{

    echo "<script>window.location='index.php'</script>";
}
	?>