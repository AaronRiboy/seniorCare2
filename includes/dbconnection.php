<?php


session_start();
date_default_timezone_set("Asia/Colombo");
$dbCon = mysqli_connect("localhost","root","", "SeniorCare");

if (mysqli_connect_errno()){
echo "Failed to connect : " . mysqli_connect_errno();
} else{

  //echo "Connection Succefull";
}
