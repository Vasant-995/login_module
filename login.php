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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <link rel="stylesheet" href="style.css">

        <title>login &regitration from</title>
    </head>
    <body>
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