<?php
include("connection.php");
//header('location:index.php');



if(isset($_GET['signup'])){
  if(!empty($_GET['username']) && !empty($_GET['email']) && !empty($_GET['password']) && !empty($_GET['country']) && !empty($_GET['address']) && !empty($_GET['phonenumber'])){

    $un=mysqli_real_escape_string($conn,$_GET['username'] );
    $em=mysqli_real_escape_string($conn,$_GET['email']);
    $pass=mysqli_real_escape_string($conn,$_GET['password']);
    
    $con=mysqli_real_escape_string($conn,$_GET['country']);
    $adr=mysqli_real_escape_string($conn,$_GET['address']);
    $pno=mysqli_real_escape_string($conn,$_GET['phonenumber']);
    echo $un;


    $sql= "Select * From customerdetails Where CustomerName='".$un."'"; //Checking if the username is already used

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
      
      //echo '<script>alert("Username Taken")</script>';
      echo "<script>document.location='index.php';alert('Username already taken');</script>";

      //header('location:index.php');//UsernameTaken
    }
    else{
    $query1="INSERT INTO customerdetails (CustomerName,CustomerPassword,CustomerEmail,CustomerPhoneNo,CustomerAddress)
     VALUES('$un','$pass','$em','$pno','$adr')";
    $query2="INSERT INTO customerloc (CustomerAddress,CustomerCountry) VALUES('$adr','$con')";
    if (mysqli_query($conn,$query1) AND mysqli_query($conn,$query2)){
      //echo '<script>alert("Registration Successful")</script>';
      //header('location:index.php');
      //new user inserted in database
    }
    // else{
    //   header('location:connection.php');
    // }
    
  
    }


          
  }
  else{
    //echo '<script>alert("All Fields Required")</script>';
    //echo "All fields required";//incomplete fields
    //header('location:index.php');
    echo "<script>document.location='index.php';alert('All fields required');</script>";
  }

}


?>