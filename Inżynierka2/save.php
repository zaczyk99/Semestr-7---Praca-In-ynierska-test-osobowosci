<?php
	include 'database.php';
	$typ=$_POST['typ'];
	$sql = "INSERT INTO `typy2`( `typ`) 
	VALUES ('$typ')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>