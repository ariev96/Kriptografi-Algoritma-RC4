<?php
	session_start();
	include "koneksi.php";
	
	$usernamelama = $_POST['usernamelama'];         
    $passwordbaru = $_POST['passwordbaru'];
    	
    $cekdata="select username from login where username='$usernamelama'"; 
	$ada=mysql_query($cekdata) or die(mysql_error());
	
	if(mysql_num_rows($ada)>0){ 
		$update       = "UPDATE login SET password='$passwordbaru'
                           where username = '$usernamelama'"; 
                          
		$result = mysql_query($update);
	
		if($result){
		   echo"<script type='text/javascript'> alert('Username/Password Berhasil Diubah'); </script>";
           echo "<meta http-equiv='refresh' content='0; url=menuadmin.php?hal=listuser'>";
            
		}
		else{
			echo"<script type='text/javascript'> alert('Data Gagal di Update'); </script>";
			echo "<script>window.location='gantipass.php'</script>";
        
        }
	}
	else{
		echo "<script type='text/javascript'>
		alert('Maaf Username Tidak Ada');
		</script>"; 
		echo "<meta http-equiv='refresh' content='0; url=menuadmin.php?hal=listuser'>";
	}

?>