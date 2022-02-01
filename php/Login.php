<?php
include("connection.php"); 

if(isset($_GET['signin'])){
    if(!empty($_GET['username']) && !empty($_GET['password'])){
        if(isset($_GET['username'])){
            $uni=mysqli_real_escape_string($conn,$_GET['username'] );
            $passi=mysqli_real_escape_string($conn,$_GET['password']);
            $sql= "Select * From customerdetails Where CustomerName='".$uni."' AND  CustomerPassword='".$passi."' Limit 1";
    
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)==1){
                session_start();
                //get customer id
                $sql1= "Select CustomerID,CustomerName From customerdetails Where CustomerName='".$uni."' AND  CustomerPassword='".$passi."' Limit 1";
                $result1=mysqli_query($conn,$sql1);
                while($row = mysqli_fetch_array($result1)) {
                    //set customerid to session
                    $_SESSION["UserID"] = $row['CustomerID'];
                    $_SESSION["CustomerName"] = $row['CustomerName'];}
                    $c_id=$_SESSION["UserID"];
                    //insert customerID in customercart
                    $query2="INSERT INTO customercart (CustomerID,Date) VALUES('$c_id',curdate())";
                    $result2=mysqli_query($conn,$query2);
                    $_SESSION["CartID"] = $conn->insert_id;
                        
                    //getting cartID from customercart
                    //$sql2= "Select CartID From customercart Where CustomerID='".$c_id."' and Date=curdate() Limit 1 ";
                    //$result3=mysqli_query($conn,$sql2);
                   // while($row = mysqli_fetch_array($result3)) {
                        //set Cartid to session
                       // $_SESSION["CartID"] = $row['CartID'];
                    //}

                //$squery= "Select CustomerID From customerdetails Where CustomerName='".$uni."'"
    //             $result = mysqli_query($connection,$squery); 
    //                while ($row = mysqli_fetch_array($result)) { //try to remove while
    //                    /echo/ $CustID= mysqli_real_escape_string($row['CustomerID']);}
    //           $qcid="INSERT INTO customercart (CustomerID) VALUES('$CustID')";


                
                header('location:Home.php');//jump to homepage


                //User in database
                //Checks if record is in the databse and loads to hompage
            }
            else{
                //alert("User not found");
                //header('location:index.php');//same page
                echo "<script>document.location='index.php';alert('User not found');</script>";

                //if record isnot in the database next sign up
                // Display the alert box 
                //alert("User not found");
                
  
            }
        }
    
    }
    else{
        //echo '<script>alert("All Fields Required")</script>';
       //echo '<script>alert("All Fields Required");document.location='BeyondtheFrame\php\index.php'</script>';
       //echo "<script>alert('All Fields Required');document.location='index.php'</script>";
       //header('location:index.php');//the same page 
       echo "<script>document.location='index.php';alert('All Fields Required');</script>";
        


    }
    


  }
  
 ?>