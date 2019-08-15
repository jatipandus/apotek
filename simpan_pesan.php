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
$idobat = $_POST['idobat'];
$tglpesan = $_POST['tglpesan'];

$sql = "INSERT INTO pesanobat(id, idobat, tglpesan) VALUES ('$id','$idobat','$tglpesan')";
if($konek->query($sql)){
  echo "Pesan Obat BERHASIL!<br/>";
}else{
  echo "Pesan Obat GAGAL : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_pesan.php'>Pesan Obat</a>";
?>
