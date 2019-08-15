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


// membuat table kamar
$sql = "CREATE TABLE obat(
  idobat VARCHAR (20) NOT NULL,
  namaobat VARCHAR (20)NOT NULL,
  hargaobat int (20) NOT NULL,
  keterangan TEXT NOT NULL,
  PRIMARY KEY (idobat)
)";

if($konek->query($sql)){
  echo "Table Obat BERHASIL dibuat!<br/>";
}else{
  echo "Table Obat GAGAL dibuat : ".$konek->error;
}

// membuat table customer
$sql = "CREATE TABLE customer(
  ktp VARCHAR (20) NOT NULL,
  namacustomer VARcHAR(200) NOT NULL,
  alamatcustomer TEXT NOT NULL,
  notelpcustomer VARCHAR(15) NOT NULL,
  PRIMARY KEY (ktp)
)";

if($konek->query($sql)){
  echo "Table Customer BERHASIL dibuat!<br/>";
}else{
  echo "Table Customer GAGAL dibuat : ".$konek->error;
}

$sql = "CREATE TABLE pesanobat(
  idpesan INT (20) NOT NULL AUTO_INCREMENT,
  idobat VARCHAR (20) NOT NULL,
  ktp VARCHAR (20) NOT NULL,
  tglpesan DATE NOT NULL,
  PRIMARY KEY (idpesan),
  FOREIGN KEY (idobat) REFERENCES obat(idobat),
  FOREIGN KEY (ktp) REFERENCES customer(ktp)
)";

if($konek->query($sql)){
  echo "Table Pesan Obat BERHASIL dibuat!<br/>";
}else{
  echo "Table Pesan Obat GAGAL dibuat : ".$konek->error;
}

$sql = "CREATE TABLE stokobat(
  idstok INT (20) NOT NULL AUTO_INCREMENT,
  idobat VARCHAR (20) NOT NULL,
  tglkadaluarsa DATE NOT NULL,
  PRIMARY KEY (idstok),
  FOREIGN KEY (idobat) REFERENCES obat(idobat)
)";

if($konek->query($sql)){
  echo "Table Stok Obat BERHASIL dibuat!<br/>";
}else{
  echo "Table Stok Obat GAGAL dibuat : ".$konek->error;
}

$konek->close();
?>
