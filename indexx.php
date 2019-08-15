<?php 
session_start();
  if (!isset($_SESSION["id"])) {
    # code...
    header("Location: index.php");
  }
  else{ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>APOTEK</title>
  </head>
  <body>
    <h1>MENU APOTEK</h1>
    <ul>
      <li>Menu Tambah : </li>
      <ul>
        <li><a href="tambah_customer.php">Tambah Customer</a></li>
        <li><a href="tambah_obat.php">Tambah Obat</a></li>
      </ul>
      <li>Menu Tampil : </li>
      <ul>
        <li><a href="tampil_customer.php">Daftar Customer</a></li>
        <li><a href="tampil_obat.php">Daftar Obat</a></li>
        <li><a href="tampil_pesan.php">Daftar Pesanan</a></li>
      </ul>
      <li>Menu Pesan Obat : </li>
      <ul>
        <li><a href="tambah_pesan.php">Pesan Obat</a></li>
      </ul>
      <li>Lainnya : </li>
      <ul>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      
  </body>
</html>
<?php } ?>