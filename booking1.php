<?php

$serviceName=$_POST['serviceName'];
$bookingDate=$_POST['bookingDate'];
$bookingTime=$_POST['bookingTime'];
$notes=$_POST['notes'];
$numOfServices=$_POST['numOfServices'];

if (!empty($serviceName) || !empty($bookingDate) || !empty($bookingTime) || !empty($notes) ||
!empty($numOfServices) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "booking";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into register (serviceName,bookingDate,bookingTime,notes,numOfServices) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->execute();
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $username, $password, $gender, $email, $phoneCode, $phone);
      $stmt->execute();
      echo "New record inserted sucessfully";
     }

     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
