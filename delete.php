<?php
	$connect = mysqli_connect("localhost", "root", "", "seniorcare");
	$sql = "DELETE FROM booking WHERE serviceID = '".$_POST["serviceID"]."'";
	if(mysqli_query($connect, $sql))
	{
		echo 'Data Deleted';
	}
 ?>
