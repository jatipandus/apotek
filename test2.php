<?php 

    $input_cari = @$_POST['inputnama']; 
    $cari = @$_POST['cari'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    
    $sql = mysqli_query("select * from obat where namaobat='$input_cari'") or die (mysql_error());   
    } 

    else {
    $sql = mysql_query("select * from obat") or die (mysql_error());
    }
    } else {
    $sql = mysql_query("select * from obat") or die (mysql_error());
    }

    $cek = mysql_num_rows($sql);

if($cek < 1) {
  ?>
  <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="7" align="center style=" padding:10px;> Data Tidak Ditemukan</td>
  </tr>
<?php 
}

else {
   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysql_fetch_array($sql)) {
   ?>
<?php 
if ($data->num_rows > 0) {
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idobat']."</td>";
    echo "<td>".$row['namaobat']."</td>";
    echo "<td>".$row['hargaobat']."</td>";
    echo "<td>".$row['keterangan']."</td>";
    echo "<td><a href='hapus_obat.php?id=".$row['idobat']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}

}
}
echo "</table>";

$konek->close();
?>

 