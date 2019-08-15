<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "obatpwd";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
$id = $_POST['id'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO login(id, nama, password, email)
 VALUES ('$id', '$nama','$password','$email')";
if($konek->query($sql)){
  echo "Data Admin BERHASIL ditambah!<br/>";
}else{
  echo "Data Admin GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_Admin.php'>Tambah Data Admin</a>";
?>
