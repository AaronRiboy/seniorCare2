<?php include "includes/signin.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style3.css" rel="stylesheet">

<style>
    body{
        background-image: url(img/sc2.jpg);
        background-size: cover ; 
        background-repeat: no-repeat;
    }

    label{
        color: #00b3b3;
        font-weight: bolder;
        margin-left: 580px;       
    }


</style>
</head>
    
<body>
 
  <form action="action_page.php">
  <div class="imgcontainer">
    <img src="img/loginSC.png" alt="Avatar" class="avatar">
  </div>

  <div>
      <img src="img/LogoS.png" alt="logo" class="logo">
</div>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          
                                    
    <?php if (isset($_GET['msg'])&&$_GET['msg']!=''){
    ?>
        <div class="alert info" style="color: #000; background: #ff8080">
        <?php echo $_GET['msg']; ?>
        </div>
        <?php
    
} ?>
    
          
				<div class="group">
      
                    
                    
                    
                    
					<label for="user" class="label">Username</label>
          <input id="user" type="text" class="input" name="username" value="<?php echo $username; ?>">
          <span><?php echo $username_error; ?></span>
          
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
          <input id="pass" type="password" class="input" data-type="password" name="password">
          <span><?php echo $password_error; ?></span>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="submit">
        </div>
        <br/><br/>
        
        <span class="login-error"><?php echo $error_msg; ?></span>
</form>  







  <div class="container">

  </div>

  <div class="container" style="background-color:#ddd">
    <a href="index.html"><button type="button" class="cancelbtn" style="color: black">Cancel</button></a>
    <span class="signup">Haven't registered? <a href="signup.html" style="color: #00b3b3 ; font-weight: bold">Sign Up</a></span>
  </div>
</form>
  
</body>
    
</html>