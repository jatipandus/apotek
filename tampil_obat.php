<?php
$host_name = "localhost"; 
$user_name = "root";
$password = "";
$database = "obatpwd"; 

mysql_connect($host_name, $user_name, $password);
mysql_select_db($database);// menghubungkan ke  database

//session_start();
  
?>

<!DOCTYPE html>
<html>
<head>
 <title>Lihat Data</title>

 <style type="text/css">
td{
 text-align: center;
}
</style>

</head>

<body background="kayu.JPG">
<fieldset>
<legend><h1>Data Obat</h1></legend>
 <div style="margin-bottom:15px;" align="right">
  <form action="" method="post">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
              <input type="text" class="typeahead form-control" required="required" name="input_cari" placeholder="Cari Obat" autocomplete="off">
              <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
         <script>
$('input.typeahead').typeahead({
  source:  function (query, process) {
  return $.get('data_obat.php', { query: query }, function (data) {
      console.log(data);
      data = $.parseJSON(data);
      return process(data);
    });
  }
});
</script>

  </form>
 </div>

 <table align="center" width="80%" border="3px solid #000" style="border-collapse:collapse;">
  <tr style="background-color:#8FBC8B;">
   <th>Id Obat</th>
   <th>Nama Obat</th>
   <th>Harga</th>
   <th>Keterangan</th>
   <th>Aksi</th>
  </tr>
   <?php 

   $input_cari = @$_POST['input_cari']; 
   $cari = @$_POST['cari'];

   // jika tombol cari di klik
    if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    
    $sql = mysql_query("select * from obat where namaobat  like '%$input_cari%'") or die (mysql_error());   
    } 

    else {
    $sql = mysql_query("select * from obat") or die (mysql_error());
    }
    }

     else {
    $sql = mysql_query("select * from obat") or die (mysql_error());
    }

   // mengecek data
   $cek = mysql_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
     <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="7" align="center" style=" padding:10px";> Data Tidak Ditemukan</td>
     </tr>
    <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysql_fetch_array($sql)) {

   ?>
   <tr>
   <td><?php echo $data['idobat'] ?></td>
    <td><?php echo $data['namaobat'] ?></td>
    <td><?php echo $data['hargaobat'] ?></td>
    <td><?php echo $data['keterangan'] ?></td>
    
    
    <!--css-->
    <td align="center">
    <button>
    <?php
    echo "<a href='hapus_obat.php?id=".$data['idobat']."'>Hapus Obat</a>";
    ?> 
    </button></td>
   </tr>
  <?php 

  } 
 }
?>
 </table>
</fieldset>
</body>
</html>