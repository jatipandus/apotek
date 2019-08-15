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
  echo "Registrasi berhasil<br/>";
}else{
  echo "Registrasi Gagal, Karena : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='index.php'>Klik Untuk Login</a><br>Atau";
echo "<a href='registrasi.php'><br>Klik Untuk Registrasi</a>";

?>
