<?php  include "includes/signup.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>SeniorCare</title>
  
   
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="style3.css">
   
    <!-- Main Styles -->
    <link rel="stylesheet" href="signup.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="responsive.css" type="text/css">
</head>

<body style="background-image:url(signup2.jpg) ; background-size: cover">

         
 <!-- Header Section Start -->
      <div class="header"> 
          <h1 style="color:#00b3b3; text-align:center; padding-top:20px; font-weight:bold">SeniorCare SignUp</h1><br>
          
        <!-- Start intro section -->
        
      <!-- Header Section End -->  

          <!-- Off Canvas Navigation -->
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">      
  <div class="login-wrap">
	<div class="login-html">
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Username</label>
					<input id="user" type="text" class="input" name="username" value="<?php echo $username; ?>">
          <span><?php echo $username_error; ?></span>
				</div>
				<div class="group">
					<label for="pass" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Password</label>
					<input id="pass" type="password" class="input" name="password">
          <span><?php echo $password_error; ?></span>

				</div>
				<div class="group">
					<label for="pass" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Fullname</label>
					<input id="fullname" type="text" class="input" name="name" value="<?php echo $name; ?>">
          <span><?php echo $name_error; ?></span>
				</div>
				<div class="group">
					<label for="pass" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Email Address</label>
					<input id="email" type="text" class="input" name="email" value="<?php $email; ?>">
          <span><?php echo $email_error; ?></span>
				</div>
                <div class="group">
					<label for="number" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Mobile No</label>
					<input id="number" type="integer" class="input" name="mobile" style="font-size: 20px" value="<?php $phone; ?>">
          <span><?php echo $phone_error; ?></span>
				</div>
                <div class="group">
					<label for="address" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">Address</label>
					<input id="address" type="text" class="input" name="address" value="<?php $address; ?>">
          <span><?php echo $phone_error; ?></span>
				</div>

 <div class="group">
 <label for="pass" class="label" style="color:#00b3b3; font-size:20px; font-weight:bold">User Type</label><br/>
        <input type="radio" value="senior" name="user_type" style="font-size:18px">&nbsp;<label style="font-size:15px">Senior Citizen</label>
        <input type="radio" value="service-provider" name="user_type" style="font-size:18px">&nbsp;<label style="font-size:15px">Service Provider</label><br><br>
				<div class="group">
					<input type="submit" style="float: left; width: 25%; padding: 14px 20px; background-color: #b30059; margin-left:350px; font-size:20px" class="button" value="Sign Up">
				</div>
                <div class="group">
                    <a href="index.php"><input type="submit" style="float: left; width: 25%; padding: 14px 20px; background-color: #00b3b3; font-size:20px" class="button" value="Cancel"></a>
				</div>
                
				<span class="signup" style="color:#ffffff ; margin-left:580px; font-size:16px">Already Registered? <a href="signin.php" style="color: #00b3b3; font-size:16px; font-weight:bold">Log In</a></span>
			</div>


    
		</div>
      </div>
      </div></div>
</form>
      </div>
</body>
</html>
  
