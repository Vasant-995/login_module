<?php

@include 'creation.php';

if(isset($_POST['btn1']))
{
   $email =$_POST['lemail'];
   $pass =md5($_POST['lpass']);

   $sel = " SELECT * FROM record WHERE Email = '$email' && Password = '$pass' ";

   
   $result =mysqli_query($conn,$sel);

   if(mysqli_num_rows($result)==1)
   {
    session_start();
    $_SESSION['Name']=$email;
    header("location: admin.php");
   }
else
{
    echo "<script> alert('Invaild User');</script>";

}

}
   ?>
<!DOCTYPE html>
<html>
    <head>
        <title>welcome</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        
        
        
    </head>
    
    <body>
    <header class="header">
            <nav class="navbar navbar-style">
                <div class="container">
                    <div class="navbar-header">
                        <a href=""><img class="logo" src="logo.png"></a>
        
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link"  href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="login2.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Register</a>
                          </li>
                        
                      </ul>
                </div>
                
            </nav>
           
            </header>
        <div class="container">
            
            <div class="froms">
                
                <div class="from login"></div>
                <div class="title">Login</div>

                
                <form method="post">
                    <div class="input-field">
                        <i class="uil uil-envelope-alt"></i>
                    <input type="text" name="lemail" class="form-control" placeholder="Enter your email"  required>
                    </div>

                    <div class="input-field">
                        <i class="uil uil-lock"></i>
                    <input type="password" name="lpass"  class="form-control" placeholder="Enter your password"  required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Remember">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                      </div>
                      <div class="form-btn">
                      <input type="submit" name="btn1" class="btn btn-primary btn-lg btn-block" value="login">
                      
                      </div>

                      <hr>
                      
                      <p>don't have an account? <a href="signup.php">register now</a></p>
                      
                </form>
              
    

            </div>
            
        </div>

       
    </body>
</html>