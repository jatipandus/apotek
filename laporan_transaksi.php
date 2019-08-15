<?php
$host="localhost";
$username="root";
$password="";
$db_name="hotelpwd";

$koneksi= new mysqli($host,$username,$password,$db_name);

//mengecek koneksi
if($koneksi->connect_error){
  die("koneksi gagal karena ".$koneksi->connect_error);
}

session_start();
  if (!isset($_SESSION["id"])) {
    # code...
    header("Location: index.php");
  }
  else{
$sql = "SELECT customer.ktp, kamar.idkamar, pesan.tglmasuk, pesan.tglkeluar from
customer, kamar, pesan;
";
$data =$koneksi->query($sql);

echo "<a href='index.php'>kembali ke menu</a>";
echo "<h1>laporan transaksi</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td>
<td>KTP</td>
<td>Id Kamar</td>
<td>Tanggal Masuk</td>
<td>Tanggal Keluar</td>";

if($data->num_rows>0){
	$no =1;
	while ($row =$data->fetch_assoc()){
	$kurang =abs(strtotime($row['tglkeluar'])-strtotime($row['tglmasuk']));
	$lama_inap = floor($kurang/(60*60*24));
	//$total_biaya =$row['harga']*$lama_inap;
	echo"<tr>";
	echo"<td>".$no++."</td>";
	echo"<td>".$row['ktp']."</td>";
	echo"<td>".$row['idkamar']."</td>";
	echo"<td>".$row['tglmasuk']."</td>";
	echo"<td>".$row['tglkeluar']."</td>";
	}
}else{
	echo "data kososng!";

}
echo "</table>";

$koneksi->close();
}
?>