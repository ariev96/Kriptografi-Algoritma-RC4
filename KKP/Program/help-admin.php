<?php
    $kd_admin   = $_SESSION['kd_admin'];
if ($kd_admin != null){
    
	
?>
<fieldset id="fieldset">
<legend id="legend"><font size="4" face="Tahoma" color ="#4169E1">Help</font></legend>
<font size="4">
<pre>
<b>1. Menu List User :</b>
    - Menu List User digunakan untuk melihat daftar username yang menggunakan
      aplikasi Security Apps.
    - Silahkan klik hapus untuk menghapus user, apabila user tidak lagi
      menggunakan aplikasi Security Apps.

<b>2. Menu List File :</b>
    - Menu List File digunakan untuk melihat daftar file yang pernah dienkripsi 
      oleh user.
    - Apabila ada laporan user yang kehilangan password dekripsi, silahkan lihat 
      password yang terdapat pada menu list file.  
  
<b>3. Menu Reset :</b>
    - Menu Reset digunakan untuk mengganti password pada akun user, apabila user 
      kehilangan(lupa) password.
      <b>Langkah Reset Password :</b>
      - Masukan username yang bersangkutan
      - Masukan password baru yang akan diganti
      - Klik button OK

<b>Note :</b>Apabila terdapat masalah pada aplikasi ini silahkan hubungi kontak dibawah.
<b>Email:</b>ariefbudiman1996@gmail.com	  
</pre>
</font>
</fieldset>
<?php
	}else{

    echo "<script>window.location='menuadmin.php'</script>";
}
	?>