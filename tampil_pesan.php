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
session_start();
  if (!isset($_SESSION["id"])) {
    # code...
    header("Location: indexx.php");
  }
  else{
$sql = "SELECT * FROM pesanobat";
$data = $konek->query($sql);

echo "<a href='indexx.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Pesan</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>ID Pesan</td><td>Username</td><td>ID obat</td><td>Tanggal Pesan</td><td>Aksi</td></tr>";
if ($data->num_rows > 0) {
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idpesan']."</td>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['idobat']."</td>";
    echo "<td>".$row['tglpesan']."</td>";
    echo "<td><a href='hapus_pesan.php?id=".$row['idpesan']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
}
?>
