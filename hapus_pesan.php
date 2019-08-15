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

$id = $_GET['id'];

$sql = "DELETE FROM pesanobat WHERE idpesan='$id'";
if($konek->query($sql)){
  echo "Data Pesan BERHASIL dihapus!<br/>";
}else{
  echo "Data Pesan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_pesan.php'>Daftar Pesan</a>";
?>
