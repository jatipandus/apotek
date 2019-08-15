<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$id =$_POST['id']; 
$password = $_POST['password'];

if (empty($id) && empty($password)) {
	header('location:login.html?error1');
	
} else if (empty($id)) {
	header('location:login.html?error=2');
	
} else if (empty($password)) {
	header('location:login.html?error=3');

}else{

//$admin = $conn->query("SELECT * from login where id='108'");
$result = $conn->query("SELECT * from login where id= '$id' and password= '$password'");
//$cs = $conn->query("SELECT * from ")
$row = mysqli_fetch_array ($result);



if (mysqli_num_rows($result) == 1 && $id=='108') {
  //  $_SESSION['user_id'] = $row['user_id'];
	$_SESSION['id'] = $id;
	$_SESSION['nama'] = $row['nama'];
	$_SESSION['email'] = $row['email'];

 //   $_SESSION['gambar'] = $row['gambar'];	

	header('location:indexx.php');
} 
elseif (mysqli_num_rows($result) == 1) {
	$_SESSION['id'] = $id;
	$_SESSION['nama'] = $row['nama'];
	$_SESSION['email'] = $row['email'];

 //   $_SESSION['gambar'] = $row['gambar'];	

	header('location:tampil_obat.php');
}
else {
	header('location:index.php?error=4');

}}
?>