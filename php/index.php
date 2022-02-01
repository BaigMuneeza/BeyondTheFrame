<?php
include("connection.php");
session_start();
session_unset();
session_destroy();
 
?>
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
    <title>BeyondTheFrame Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="Login.php" class="sign-in-form" method="GET">
            <h2 class="title">Sign in </h2>
            <div class="input-field"><i class="fas fa-user"></i><input type="text" placeholder="Username" name="username"/></div>
            <div class="input-field"><i class="fas fa-lock"></i><input type="password" placeholder="Password" name="password"/></div>
            <input type="submit" value="Login" name= "signin" class="btn solid" />

            
          


          </form>
          <form action="Registration.php" class="sign-up-form" method="GET">
          
            <h2 class="title" style="margin-top:1.5em">Sign up</h2>
            <div class="input-field"><i class="fas fa-user"></i><input type="text" placeholder="Username" name="username" /></div>
            <div class="input-field"><i class="fas fa-envelope"></i><input type="email" placeholder="Email" name="email"/></div>
            <div class="input-field"><i class="fas fa-lock"></i><input type="password" placeholder="Password" name="password"/></div>
            <div class="input-field"><i class="fas fa-globe-asia"></i><input type="text" placeholder="Country" name="country"/></div>
            <div class="input-field"><i class="fas fa-address-book"></i><input type="text" placeholder="Address" name="address"/></div>
            <div class="input-field"><i class="fas fa-phone-alt"></i><input type="tel" placeholder="Phone number" name="phonenumber"/></div>

            <input type="submit" class="btn" value="Sign up" name="signup" />
            <!-- onclick="SignUpForm.CreateAccount()" -->

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1 style="font-size: 3em ">BeyondTheFrame</h1>
            <p>Create your Account Now!</p>
            <button class="btn transparent" id="sign-up-btn" >Sign up</button>
          </div>
          <!-- <img src="img/log.svg" class="image" alt="" /> -->
        </div>
        <div class="panel right-panel">
          <div class="content">
          <h1 style="font-size: 3em ">BeyondTheFrame</h1>
            <p>Already have an account? Let's Shop!</p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <!-- <img src="img/register.svg" class="image" alt="" /> -->
        </div>
      </div>
    </div>

    <script src="../js/app.js"></script>
    <!-- <script src="./js/signup.js"></script> -->
     
  </body>
</html>
