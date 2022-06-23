<?php
require_once __DIR__ . '/../entities/mysqlconnection.php';
require_once __DIR__ . '/../entities/admin.php';
require_once __DIR__ . '/../manager/adminManager.php';

if(isset($_POST['username'],$_POST['password'])){
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin'){
      
        header('location:../../presentation/index.php');
    
    }
      
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../assets/css/authentication.css">
</head>
<body>
    
<div class="main">     
         <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../assets/images/Tablet login-bro.png" alt="sing up image"></figure>
                        <!-- <a href="sign-up.php" class="signup-image-link">Create an account</a> -->
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) / Edited By Merradou Abderrahmane -->
</html>