<?php
	session_start();
	include "koneksi.php";
	 
	$username = $_POST['username'];
    $password = $_POST['password'];
	
if($username and $password == NULL){	
	echo"<script type='text/javascript'>
	alert('Username atau password tidak boleh kosong');
	</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?hal=login'>";		
}
else{
    
    
     
    $cari       = sprintf("SELECT   kd_user, username, password
                           FROM     login 
                           WHERE    username = '%s' 
                           AND      password='%s'", $username,$password);
    
    $sql        = mysql_query($cari);    
    $rc         = mysql_num_rows($sql);
	
    if($rc == 1){
        while ($row = mysql_fetch_array($sql)){
            $_SESSION['kd_user']    = $row['kd_user'];
            $_SESSION['username']   = $row['username'];
                        
			echo"<script type='text/javascript'> alert('Login Berhasil'); </script>";
			echo "<script>window.location='menu.php'</script>";
            }
	}
    else{
		echo"<script type='text/javascript'> alert('Username dan Password Kosong atau salah!'); </script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php?hal=login'>";
        
    }
}

?>