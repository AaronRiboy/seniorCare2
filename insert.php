<?php
$connect = mysqli_connect("localhost", "root", "", "seniorcare");
$sql = "INSERT INTO booking(serviceName, bookingDate,bookingTime,notes,numOfServices,status ) VALUES('".$_POST["serviceName"]."', '".$_POST["bookingDate"]."', '".$_POST["bookingTime"]."' , '".$_POST["notes"]."' ,'".$_POST["numOfServices"]."', '".$_POST["status"]."')";
if(mysqli_query($connect, $sql))
{
     echo 'Data Inserted';
}
 ?>
