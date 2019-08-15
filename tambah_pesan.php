<?php 
$konek = new mysqli("localhost","root","","obatpwd");


// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT *FROM obat";
$data=$konek->query($sql);
$dataa=$konek->query("SELECT *FROM login");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>APOTEK</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Pesan Obat</h1>
    <form action="simpan_pesan.php" method="post">
      <table>
        <tr>
          <td>ID</td>
          <td>:</td>
          <td><select name="id">
          <?php
          if($dataa->num_rows>0){
            while($row=$dataa->fetch_assoc()){
              echo " <option value='".$row['id']."'>".$row['id']."</option>";

            }
          }
          ?>
          </select></td>
        </tr>
        <tr>
          <td>ID Obat</td>
          <td>:</td>
          <td><select name="idobat">
          <?php
          if($data->num_rows>0){
            while($row=$data->fetch_assoc()){
              echo " <option value='".$row['idobat']."'>".$row['idobat']."</option>";

            }
          }
          ?>
          </select></td>
        </tr>
        <tr>
          <td>Tanggal Pesan</td>
          <td>:</td>
          <td><input type="date" name="tglpesan"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
