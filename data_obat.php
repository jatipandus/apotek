<?php
$con=mysqli_connect("localhost","root","","obatpwd");

	$sql = "SELECT namaobat  FROM obat
			WHERE namaobat LIKE '%".$_GET['query']."%'
			LIMIT 10"; 
	$result    = mysqli_query($con,$sql);
		
	$json = [];
	while($row = $result->fetch_assoc()){
	     $json[] = $row['namaobat'];
	}

	echo json_encode($json);
?>