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

$idobat = $_POST['idobat'];
$namaobat = $_POST['namaobat'];
$hargaobat = $_POST['hargaobat'];
$keterangan = $_POST['keterangan'];


$sql = "INSERT INTO obat(idobat, namaobat, hargaobat, keterangan) VALUES ('$idobat','$namaobat','$hargaobat','$keterangan')";
if($konek->query($sql)){
  echo "Data obat BERHASIL ditambah!<br/>";
}else{
  echo "Data obat GAGAL ditambah : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tambah_obat.php'>Tambah Data Obat</a>";
?>
