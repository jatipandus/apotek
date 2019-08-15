<?php

$servername="localhost";
$username="root";
$password="";
$dbname="obatpwd";
$conn=new mysqli($servername, $username, $password,$dbname);

//fungsi format rupiah
/**function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
    }**/
?>
