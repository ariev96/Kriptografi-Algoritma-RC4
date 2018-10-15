<?php
include "koneksi.php";
$username=$_POST['username'];
$password=($_POST['password']);

	if($username and $password == NULL){	
		echo"<script type='text/javascript'>
		alert('Username atau password tidak boleh kosong');
		</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php?hal=register'>";		
	}
	else{
		$cekdata="select username from login where username='$username'"; 
		$ada=mysql_query($cekdata) or die(mysql_error()); 
			if(mysql_num_rows($ada)>0) { 
				echo "<script type='text/javascript'>
				alert('Maaf Username Sudah di Gunakan');
				</script>"; 
				echo "<meta http-equiv='refresh' content='0; url=index.php?hal=register'>";
			} 
			else {
				mysql_query("insert into login (username,password) values ('$username','$password')");
				echo"<script type='text/javascript'>
				alert('Anda berhasil melakukan Registrasi, Silahkan Login');
				</script>";
				echo "<meta http-equiv='refresh' content='0; url=index.php?hal=login'>";
			} 			
	}
?>