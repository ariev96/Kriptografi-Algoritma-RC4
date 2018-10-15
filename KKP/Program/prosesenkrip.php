<?php
$kd_user   = $_SESSION['kd_user'];
?>

<?php

	include 'koneksi.php';
	ini_set('memory_limit', '-1');
	ini_set('max_execution_time', '-1');

	$panjangpass = $_POST['katakunci'];
	$namafile = $_FILES['file']['name'];//strrpos= mencari posisi karakter dari suatu variabel
	$uploaded_ext = substr($namafile, strrpos($namafile, '.') + 1);//substr=mengambil sebagian karakter
	$uploaded_size = $_FILES["file"]["size"];
	function microtime_float()
	{
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}
	$time_start = microtime_float();
	if($_FILES["file"]["error"] != 0){
		echo "<script>alert('Tidak ada file yang diupload!')</script>";
		echo "<a href=?hal=enkrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";
		return;
	}
	if(strlen($panjangpass)<8){
		echo "<script>alert('Password kurang dari 8 atau Password Kosong!')</script>";
		echo "<a href=?hal=enkrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";
		return;
	}
	if($uploaded_ext != "txt" && $uploaded_ext != "xls" && $uploaded_ext != "xlsx" && $uploaded_ext != "pdf" && $uploaded_ext != "docx" && $uploaded_ext != "doc"){
		echo "<script>alert('File yang dipilih tidak valid')</script>";
		echo "<a href=?hal=enkrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";
		return;
	}
	if($uploaded_size > 2097152){
		echo "<script>alert('File yang dimasukan lebih besar dari 2MB')</script>";
		echo "<a href=?hal=enkrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";
		return;
	}

	//Fungsi Proses Enkripsi RC4
	function setupkey(){  //proses KSA key scheduling algoritm
	error_reporting(E_ALL ^ (E_NOTICE));
	
	  $pass = $_POST["katakunci"];
	  $key=array();
	  for($i=0;$i<256;$i++){
		$key[$i]=ord($pass[$i % strlen($pass)]); 
	   }//ambil nilai ASCII dari tiap karakter password
	   //masukan password ke array key secara berulang sampai penuh
	   
	   //isi array s
	   global $s;
	   $s=array();	   	   
	   for($i=0;$i<256;$i++){
		$s[$i] = $i;//isi array s 0 s/d 255
	   }
	   
	   //permutasi/pengacakan isi array s
	   $j = 0;
	   $i = 0;	   
	   for($i=0;$i<256;$i++)
		{
		 $a = $s[$i];
		 $j = ($j + $s[$i] + $key[$i]) % 256;
		 $s[$i] = $s[$j]; //swap
		 $s[$j] = $a;		 
		}
	} 
	
	//proses PRGA
	function enkrip($plainttext){
	 global $s;
	 $x=0;$y=0;
	 $ciper='';
	 for($n=1;$n<= strlen($plainttext);$n++){
	 $x = ($x+1) % 256;
	 $a = $s[$x];
	 $y = ($y+$a) % 256;
	 $s[$x] = $b = $s[$y];//swap
	 $s[$y] = $a;
	 /*proses XOR antara plaintext dengan kunci
	 dengan $plainttext sebagai plaintext
	 dan $s sebagai kunci*/
	 $ciper = ($plainttext^$s[($a+$b) % 256]) % 256;
	 return $ciper;
	 }
	}
	
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/temp");
	$isifile = file_get_contents("upload/temp");
	
	// Algoritma Enkripsi RC4
	setupkey();
	for($i=0;$i<strlen($isifile);$i++){
	 $kode[$i]=ord($isifile[$i]); /*rubah ASCII ke desimal*/
	 $b[$i]=enkrip($kode[$i]); /*proses enkripsi RC4*/
	 $c[$i]=chr($b[$i]); 
	}
	$hasil = '';
	 for($i=0;$i<strlen($isifile);$i++){
	  $hasil = $hasil . $c[$i];

	 }
	 
	



	//Menyimpan File yang di enkripsi
	move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
	$namafile =$_FILES["file"]["name"];
	$nama_file= str_replace(" ","_", $namafile);
	
	 
	
	/*simpan data di file*/
	
	$fp = fopen("upload/Enkrip_".$nama_file,"w");
	fwrite($fp,$hasil);
	fclose($fp);
	$time_end = microtime_float();
	$time = $time_end - $time_start;
	
	$nm_file = "Enkrip_".$nama_file;
	
	//Keterangan File 
	echo"<fieldset id='fieldset'>
	<legend id='legend'><font size='4' face='Tahoma' color ='#4169E1'>Enkripsi</font></legend>";
	echo" <h2><center><font color='#4169E1'>HASIL PROSES ENKRIPSI</font></center></h2>";
	echo "Upload: " 	. $_FILES["file"]["name"] . "<br />";
	echo "Type: " 		. $_FILES["file"]["type"] . "<br />";
	echo "Size: " 		. ($_FILES["file"]["size"] / 1024) . " Kb";	     
	echo "<br>File Hasil Enkripsi :"; echo $nm_file; 
	
	echo "<br>Waktu Proses Enkripsi : $time seconds\n</br>";
	
		$query = "SELECT counter FROM login WHERE username='$username'";
		$sql = mysql_query($query);
		$data = mysql_fetch_array($sql);
		$awal = $data[0];
		$counter = $awal+1;
		$input = "UPDATE login SET counter='$counter' WHERE username='$username'";
		$sql2 = mysql_query($input);
		
		//Input Data File ke database---------------------------------------
		mysql_query("insert into file (nama_file,password,kd_user) values ('$nm_file','$kcf','$kd_user')");	
	echo "<br><a href=?hal=enkrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";echo "<a href=download.php?download_file=".$nm_file.">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='tombol' name='Download'>Download</button></a>";

echo"</fieldset>";
	?>
