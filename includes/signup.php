
<?php

include("includes/dbconnection.php");
$name_error = $email_error = $phone_error = $username_error = $password_error = $user_type_error ="";
$name = $email = $phone = $username = $password = $address = $user_type =  "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['username'])){
            $username_error = "Username is required";
        } else {
            $username = $_POST['username'];

            //check if username is available in database 
            $sql = "select USERNAME from signup WHERE USERNAME='".$username."'";
            $query = mysqli_query($dbCon,$sql);
            echo mysqli_error($dbCon);
            if(mysqli_num_rows($query) == TRUE){
                $username_error = "Username already exists";
            }

                if(!preg_match("/^[a-zA-Z ]*$/",$username)){
                    $username_error = "Only letters and white space allowed";
                }
            
        } // end of username validation

        
        if(empty($_POST['password'])){
            $password_error = "Password is required";
        } else {
            $password = $_POST['password'];
              
            if(strlen($password) <= 8){
                $password_error = "Password should contain more than 8 characters";
            }
            
        } // end of password validation


        

        if(empty($_POST['name'])){
            $name_error = "Full name is required";
        } else {
            $name = $_POST['name'];
            
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                $name_error = "Only letters and white space allowed";
            }
           
            
        } // end of full name validation
    
        
        
        if(empty($_POST['email'])){
            $email_error = "Email is required";
        } else {
            $email = $_POST['email'];
           
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_error = "Invalid email format";
            }
           
            
        } // end of email validation
    

        if(empty($_POST['mobile'])){
            $phone_error = "Mobile Number is required";
        } else {
            $phone = $_POST['mobile'];
           
          if(!preg_match("/^[0-9\-]|[\+0-9]|[0-9\s]|[0-9()]*$/",$phone)){
            $phone_error = "Invalid Phone number";
          }
            if(empty($_POST['address'])){
            $phone_error = "Address is required";
        } 
            
        } // end of phone number validation

        if(empty($_POST['user_type'])){
            $user_type_error = "Please select user type";
        } else {
            $user_type = $_POST['user_type'];
            
        } // end of user type validation


    
        

       if($name_error == '' and $phone_error == '' and $username_error == '' and $password_error == '' and $user_type_error == ''){
    
        $user_type = $_POST['user_type'];
        $datetime = date("Y-m-d H:i:s");
        $date = date("Y-m-d");


        $sql_insert = "INSERT INTO signup (username,password,fullname ,email,mobile,address,user_type) VALUES ('".$username."','".$password."','".$name."','".$email."','".$phone."','".$address."','".$user_type."')";
        $query_insert = mysqli_query($dbCon,$sql_insert);
           echo mysqli_error($dbCon);
        if($query_insert == TRUE ){
            
            
            echo "<script type='text/javascript'>
                    alert('Successfully Registered.');
                    </script>";
            
            if($user_type == 'senior'){

                $_SESSION['auth'] = 1;
                $_SESSION['name'] = $name;
                $_SESSION['user_id'] = $dbCon->insert_id;

                header("Location: signin.php");
                
                echo "<script type='text/javascript'>
                    alert('Successfully Registered.');
                    </script>";
                
                                
            } else {
                $_SESSION['auth'] = 1;
                $_SESSION['name'] = $name;
                $_SESSION['user_id'] = $dbCon->insert_id;
                header("Location: signin.php");
                
            }



        }
           
       }


} 


?>

