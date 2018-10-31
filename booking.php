<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "booking";
 $con = new mysqli($servername, $username, $password, $dbname);

 $serviceName=$_POST['serviceName'];
 $bookingDate=$_POST['bookingDate'];
 $bookingTime=$_POST['bookingTime'];
 $notes=$_POST['notes'];
 $numOfServices=$_POST['numOfServices'];

 if (!empty($serviceName) || !empty($bookingDate) || !empty($bookingTime) || !empty($numOfServices)){
   #code
 }else {
   echo "The field are required except 'Optional' ";
   die;
 }


 $sql = "INSERT INTO  booking(serviceName,bookingDate,bookingTime,notes,numOfServices)
         VALUES ('$serviceName','$bookingDate','$bookingTime','$notes','$numOfServices')";

 mysqli_query($con, $sql);
 mysqli_close($con);

?>
