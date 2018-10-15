<?php
$kd_user   = $_SESSION['kd_user'];
?>
	
<?php

	include 'koneksi.php';
	// mendeklarasikan kunci yang digunakan 
	// akhir pendeklarasian kunci

	ini_set('memory_limit', '-1');
	ini_set('max_execution_time', '-1');
	$kcf = $_POST["katakunci"];
	$uploaded_name = $_FILES['file']['name'];
	$uploaded_ext = substr($uploaded_name, strrpos($uploaded_name, '.') + 1);
	$uploaded_size = $_FILES["file"]["size"];
	$dta = $_FILES["file"]["type"];
	
	
	
	function microtime_float()
	{
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}
	$time_start = microtime_float();
	if($_FILES["file"]["error"] != 0){
		echo "<script>alert('Tidak ada file enkrip yang diupload!')</script>";
		echo "<a href=?hal=dekrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";
		return;
	}	
	if(substr($uploaded_name,0,7)!="Enkrip_"){
		echo "<script>alert('File yang dimasukan bukan hasil enkripsi')</script>";
		echo "<a href=?hal=dekrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";
		return;
	}
	if(strlen($kcf)<8){
		echo "<script>alert('Password Kurang dari 8 karakter atau Password Kosong!')</script>";
		echo "<a href=?hal=dekrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";
		return;
	}
	echo"<fieldset id='fieldset'>
	<legend id='legend'><font size='4' face='Tahoma' color ='#4169E1'>Dekripsi</font></legend>";
	echo" <h2><center><font color='#4169E1'>HASIL PROSES DEKRIPSI</font></center></h2>";
	//Keterangan File 
	  echo "Upload : " 		. $_FILES["file"]["name"] . "<br />";
	  echo "Type : "		. $_FILES["file"]["type"] . "<br />";
	  echo "Size : " 		. ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	  //echo "Stored in : "	. $_FILES["file"]["tmp_name"];
	  
			//Fungsi Proses Dekripsi RC4
			$pass = $_POST["katakunci"];
			$namafile = $_FILES["file"]["name"];
			function setupkey(){
			error_reporting(E_ALL ^ (E_NOTICE));
			$pass = $_POST["katakunci"];
			//echo "<br>";
			for($i=0;$i<256;$i++){
			$key[$i]=ord($pass[$i % strlen($pass)]); /*rubah ASCII ke desimal*/
			}
			global $mm;
			$mm=array();
			/*buat decrypt*/
			for($i=0;$i<256;$i++){
			$mm[$i] = $i;
			}
			$j = 0;
			$i = 0;
			for($i=0;$i<256;$i++){
			$a = $mm[$i];
			$j = ($j + $a + $key[$i]) % 256;
			$mm[$i] = $mm[$j];
			$mm[$j] = $a;
			
			}
			} /*akhir function*/
			function decrypt2($chipertext){
			global $mm;
			$xx=0;$yy=0;
			$plain='';
			for($n=1;$n<= strlen($chipertext);$n++){
			$xx = ($xx+1) % 256;
			$a = $mm[$xx];
			$yy = ($yy+$a) % 256;
			$mm[$xx] = $b = $mm[$yy];
			$mm[$yy] = $a;
			/*proses XOR antara chipertext dengan kunci
			dengan $chipertext sebagai chipertext
			dan $mm sebagai kunci*/
			$plain = ($chipertext^$mm[($a+$b) % 256]) % 256;
			return $plain;
			}
			}
			setupkey();
			$nmfile =  "upload/$namafile";
			/*ambil data dari file enkripsifile*/
			$fp = fopen($nmfile, "r");
			$isi = fread($fp,filesize($nmfile));
			$go = $isi;
			$key = $kcf;
			
			// Algoritma Dekripsi RC4
			for($i=0;$i<strlen($go);$i++){
			$b[$i]=ord($go[$i]); /*rubah ASCII ke desimal*/
			$d[$i]=decrypt2($b[$i]); /*proses dekripsi RC4*/
			$s[$i]=chr($d[$i]); /*rubah desimal ke ASCII*/
			} 
			$hsl='';
			//Hasil Dekripsi 
			for($i=0;$i<strlen($go);$i++){
			$hsl = $hsl . $s[$i];
			}
			move_uploaded_file($_FILES["file"]["tmp_name"],"upload/temp");
			$namafile = str_replace("Enkrip","Dekrip", $_FILES["file"]["name"]);
	
	/*simpan data di file*/
	$fp = fopen("upload/". $namafile,"w");
	fwrite($fp,$hsl);
	fclose($fp);
	$time_end = microtime_float();
	$time = $time_end - $time_start;
	
	echo "File Hasil Dekripsi :"; echo $namafile; 
	//echo "<br>Lokasi Hasil Dekripsi :"; echo realpath("upload/". $namafile);
	echo "<br>Waktu Proses Dekripsi : $time seconds\n";
	// echo "<br>File Berhasil Didekripsi ! ";
	// echo "<br>file :" .$isi. "<br>menjadi : ".$hsl;
	//	echo "<br>Isi File Enkripsi: "; echo $dataen;
	
		$query = "SELECT counter FROM login WHERE username='$username'";
		$sql = mysql_query($query);
		$data = mysql_fetch_array($sql);
		$awal = $data[0];
		$counter = $awal+1;
		$input = "UPDATE login SET counter='$counter' WHERE username='$username'";
		$sql2 = mysql_query($input);
	//masukan data ke dalam data base
		mysql_query("insert into file (nama_file,password,kd_user) values ('$namafile','$kcf','$kd_user')");	
		
		
		
	echo "<br><br><a href=?hal=dekrip> <button class='tombol' name ='Kembali'>Kembali</button> </a>";echo "<a href=download.php?download_file=".$namafile.">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='tombol' name='Download'>Download</button></a>";
	echo"</fieldset>";
	?>	