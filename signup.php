<?php

@include 'creation.php';

if(isset($_POST['sub']))
{
 
   $name =$_POST['nav'];
   $Lname =$_POST['Lnav'];
   $email =$_POST['em'];
   $pass =md5($_POST['pas']);
   $cpass =md5($_POST['cpas']);  

   $select = " SELECT * FROM record WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0)
   {

      $error[] = 'user already exist!';
      echo "<script> alert('user alredy exist!');</script>";

   }
   else
   {
   

      if($pass != $cpass)
      {
         $error[] = 'password not matched!';
         echo "<script> alert('Password Incorrect');</script>";
      }
      else
      {
        
         $insert = "INSERT INTO record(Name,Lastname,Email,Password) VALUES('$name','$Lname','$email','$pass')";
         if($insert)
         {
            echo "insert";

         }
         else{
            echo "erro";
         }
         $res= mysqli_query($conn, $insert);
         if($res)
         {
            header('location:signup.php');
            echo "<script> alert('Registerd');</script>";
          
        }
        else
        {
            echo "failed to insert";
        }
         }
         
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

        <link rel="stylesheet" href="style2.css">

      
        <title>registration from</title>
    </head>
    <body>
        <div class="container">
            <div class="froms">
                <div class="from login"></div>
                <div class="title">registration</div>

                <form method=post>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">First Name</label>
                    <input type="text" name="nav" class="form-control"  placeholder="Enetr First Name">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Last Name</label>
                    <input type="text" name="Lnav" class="form-control" placeholder="Enter Last Name">
                  </div>
                  

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="em" placeholder="Enter Email" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="pas" placeholder="Enter Password" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">confirm Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="cpas" placeholder="Re-Enter Password" class="form-control">
                    </div>
                    <hr>
                    <div class="form-btn">
                      <input type="submit" name="sub" class="btn btn-outline-primary" value="Submit">
                      <input type="reset" name="ret" class="btn btn-outline-warning" value="Reset">
                      </div>
                  </div>

            </div>
            
        </div>
    </body>

</html>




