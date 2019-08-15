<?php
$con=mysqli_connect("localhost","root","","dbnegara");

	$sql = "SELECT nama_negara  FROM negara
			WHERE nama_negara LIKE '%".$_GET['query']."%'
			LIMIT 10"; 
	$result    = mysqli_query($con,$sql);
		
	$json = [];
	while($row = $result->fetch_assoc()){
	     $json[] = $row['nama_negara'];
	}

	echo json_encode($json);
?>