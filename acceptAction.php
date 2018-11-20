<?php
include("dbconnection.php");
session_start();
$user_name = $_SESSION['login_user'];
$id = $_GET['serviceID'];
$sql = "UPDATE booking SET status = 'Accepted', assignedTo = '$username' WHERE serviceID = $id";

if (mysqli_query($conn, $sql)){
  mysqli_close($conn);
  echo '<script language="javascript">';
  echo 'alert("Request Accepted!")';
  echo '</script>';
  echo  "<script> window.location.assign('ViewRequestsSP.php'); </script>";
} else {
  echo "Error Accepting Request!";
}
?>
