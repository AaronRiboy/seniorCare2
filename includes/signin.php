<?php

require "dbconnection.php";


$username_error = $password_error = "";
$username = $password = $error_msg = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST['username'])){
        $username_error = "Please enter username";
    } else {
        $username = $_POST['username'];

        $sql = "select USERNAME from signup WHERE USERNAME='".$username."'";
        $query = mysqli_query($dbCon,$sql);

        if(!mysqli_num_rows($query) > 0){
            $username_error = "Username entered cannot be found";
        }
    }


    if(empty($_POST['password'])){
        $password_error = "Please enter password";
    }else {
        $password = $_POST['password'];
    }

    
    if($password_error == "" and $username_error == ""){
        $sql = "SELECT * from signup WHERE USERNAME='".$username."' && PASSWORD='".$password."'";
        $query = mysqli_query($dbCon,$sql);
        $login_details = mysqli_fetch_array($query);
        $resultcheck = mysqli_num_rows($query);

        if($resultcheck > 0){
            $_SESSION['auth'] = 1;
            $_SESSION['name'] = $name;
            $_SESSION['user_id'] = $login_details['USER_ID'];
            $datetime = date("Y-m-d H:i:s");
           
            if($login_details['user_type'] == "senior"){
               header("Location: homeSenior.php");
                $user = $_SESSION['user_id'];
           } else {
               header("Location: homeService.php");
           }
        } else {
            $error_msg = "username or password incorrect";
        }
    }
    
}


?>