
if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    
    $sql = mysql_query("select * from obat where namaobat like '%$input_cari%'") or die (mysql_error());   
    } 

    else {
    $sql = mysql_query("select * from obat") or die (mysql_error());
    }

    }

     else {
    $sql = mysql_query("select * from obat") or die (mysql_error());
    }

else if ($cari < 1) {
  
    $sql = $konek->query("select * from obat where namaobat  like '%$input_cari%'") or die ($konek->error());   
   $cek = mysqli_num_rows($sql);

    } 

else {
    $sql = $konek->query("select * from obat") or die ($konek->error());
    }

   
if ($cek < 1) {
  echo "<tr>"; // <!--muncul peringata bahwa data tidak di temukan-->
  echo "<td>";
  echo "Data Tidak Ditemukan";
  echo "<td>"; 
  echo "</tr>";
  # code...
}