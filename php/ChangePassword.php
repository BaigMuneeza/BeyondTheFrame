
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body style="background-image: url('../assets/StyleAssets/Index_bg.jpg')">
<!-- <div class="forms-container"> -->
        <!-- <div class="signin-signup"> -->
          <form action="ChangePassword.php" class="Change-pass-form" method="GET">
            <h2 style="color:white" class="title">Change Password</h2>
            <div class="input-field"><i class="fas fa-user"></i><input type="text" placeholder="Username" name="user_n"/></div>
            <div class="input-field"><i class="fas fa-lock"></i><input type="text" placeholder="Current password" name="password_o"/></div>
            <div class="input-field"><i class="fas fa-lock"></i><input type="text" placeholder="New password" name="password_n"/></div>
            <div class="input-field"><i class="fas fa-lock"></i><input type="text" placeholder="Confirm password" name="password_c"/></div>
            <input type="submit" value="Update" name= "passChange" class="btn solid" />
            <input type="submit" value="Home" name= "GotoHome" class="btn solid" />
          </form>
        <!-- </div> -->
      <!-- </div>    -->
     
      </body>
</html>

<?php
include("connection.php");

if(isset($_GET['GotoHome']))
{
  header("Location: Home.php");
}

if(isset($_GET['passChange'])){
    if(!empty($_GET['password_o']) && !empty($_GET['password_n']) && !empty($_GET['password_c'])&& !empty($_GET['user_n'])){
        if(isset($_GET['password_o'])){
            $user=mysqli_real_escape_string($conn,$_GET['user_n'] );
            $passo=mysqli_real_escape_string($conn,$_GET['password_o'] );
            $passn=mysqli_real_escape_string($conn,$_GET['password_n']);
            $passc=mysqli_real_escape_string($conn,$_GET['password_c']);

            $sqlp= "Select * From customerdetails Where CustomerName='".$user."' AND CustomerPassword='".$passo."' Limit 1";
            $resultp=mysqli_query($conn,$sqlp);

            if(mysqli_num_rows($resultp)==1){
              if ($passn==$passc){
                //new and confirm pass match 
                
                $q = "UPDATE customerdetails SET CustomerPassword='".$passn."' WHERE CustomerName='".$user."'";
                if (mysqli_query($conn,$q)){
                  //passsword updated
                  header('location:Home.php');
                }
                else{
                  //header('location:ChangePassword.php');
                  echo '<script>alert("not updated")</script>';
                  //echo 'not updated';
                }
                //header('location:Home.php');//Home
                //User in database
                //Checks if record is in the databse and loads to hompage

              }
              else{
                echo '<script>alert("new passwords do not match")</script>';
                //old new dont match
                //header('location:ChangePassword.php');
              }
                
            }
            else{
              echo '<script>alert("Password record is not in the database")</script>';
                
                //header('location:ChangePassword.php');//same page
                //if password record isnot in the database 
                 
            }
        }
    
    }
    else{
        echo '<script>alert("All Fields Required")</script>';
        //header('location:index.php');//the same page     
    } 
  } 

 ?>