<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "seniorcare";
 $con = new mysqli($servername, $username, $password, $dbname);

 $serviceName=$_POST['serviceName'];
 $bookingDate=$_POST['bookingDate'];
 $bookingTime=$_POST['bookingTime'];
 $notes=$_POST['notes'];
 $numOfServices=$_POST['numOfServices'];



//test
 if(isset($_POST['submit'])) {
    echo "Error your has not send";
 } else {
   $sql = "INSERT INTO `booking` ( `serviceName`, `bookingDate`, `bookingTime`, `notes`, `numOfServices`)
    VALUES ('$serviceName','$bookingDate','$bookingTime','$notes','$numOfServices')";
            mysqli_query($con, $sql);

     echo "<script>
             alert('Your Booking request has sent successfully.Thank you');
             window.history.go(-1);
          </script>";
 }





 mysqli_close($con);

?>
