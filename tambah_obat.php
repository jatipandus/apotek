<?php 
$konek = new mysqli("localhost","root","","obatpwd");


// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT *FROM obat";
$data=$konek->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>APOTEK</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Tambah Obat</h1>
    <form action="simpan_obat.php" method="post">
      <table>
        <tr>
          <td>ID Obat</td>
          <td>:</td>
          <td><input type="text" name="idobat" required="true"></td>
        </tr>
        <tr>
          <td>Nama Obat</td>
          <td>:</td>
          <td><input type="text" name="namaobat" required="true"></td>
        </tr>
        <tr>
          <td>Harga Obat</td>
          <td>:</td>
          <td><input type="number" name="hargaobat" required="true"></td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td>:</td>
          <td><textarea name="keterangan" rows="8" cols="40" required="true"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
