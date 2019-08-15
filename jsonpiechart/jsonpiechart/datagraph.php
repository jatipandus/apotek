<?php
$con=mysqli_connect("localhost","root","","dbgraph");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}



$result = mysqli_query($con,"SELECT browsername, total FROM browser");

$rows = array();
while($r = mysqli_fetch_array($result)) {
	$row[0] = $r[0];
	$row[1] = $r[1];
	array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 
