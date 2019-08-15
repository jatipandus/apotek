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
$sql = "SELECT * FROM login where id!='108'";
$data = $konek->query($sql);

echo "<a href='indexx.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr><td align='center'>No.</td><td align='center'>Username</td><td align='center'>Nama Customer</td><td align='center'>Email</td><td align='center'>Aksi</td></tr>";
if ($data->num_rows > 0) {
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td><a href='hapus_customer.php?id=".$row['id']."'><button>Hapus</button></a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
}
?>
