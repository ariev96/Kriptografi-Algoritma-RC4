<?php

//koneksi.php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_kkp";

error_reporting(E_ALL ^ E_DEPRECATED);
//1.koneksi ke mysql server
$link = mysql_connect($host, $user, $pass);

//2.aktifkan database
mysql_select_db($db,$link);

?>