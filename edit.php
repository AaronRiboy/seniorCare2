<?php
	$connect = mysqli_connect("localhost", "root", "", "seniorcare");
	$serviceID = $_POST["serviceID"];
	$text = $_POST["text"];
	$column_name = $_POST["column_name"];
	$sql = "UPDATE booking SET ".$column_name."='".$text."' WHERE serviceID='".$serviceID."'";
	if(mysqli_query($connect, $sql))
	{
		echo 'Data Updated';
	}
 ?>
