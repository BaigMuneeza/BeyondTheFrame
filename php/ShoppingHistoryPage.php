<?php
// database connection code

session_start();

$servername = "localhost";
$username = "root";
$password = "dbms";/* Put your password */
$dbname = "beyond the frame";/* Put your database name */
$SearchDataEntered = false;
$result = null;
$SearchedBillingRecord = [];
$SearchClicked = true;

$data = null;
/* Create connection */
$conn = new mysqli($servername, $username, $password, $dbname);
/* Check connection*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else
    // echo ('Connected.. !');
    if(isset($_POST['SearchBtn']))
    {	 
        if(empty($_POST['SearchBillingHistory']))
        { 
            $SearchDataEntered = true;
            $SearchClicked = true;
        }
        else
        {            
            $SearchClicked = false;
            $SearchDataEntered = false;
            // $DeliveryCharges =250;
            // $TotalAmount = 500;
            // $ProductTotal = $DeliveryCharges + $TotalAmount;
            $c_id=$_SESSION["UserID"]; //CustomerId
            $SearchBillingHistory= $_POST['SearchBillingHistory']; 
            $sql = "SELECT * FROM Billing WHERE BillingID = $SearchBillingHistory AND CustomerID = $c_id";
     
            $result = $conn->query($sql);
            $data = $result;
            
            if ($result->num_rows > 0) { 
              // output data of each row
              while($row = $result->fetch_assoc()) 
              {         
                array_push($SearchedBillingRecord , $row);            
              }

            } 
            else 
            {
            //   echo "0 results";
            } 
        } 
        
    }  
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeyondTheFrame</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/b010d9c86d.js" crossorigin="anonymous"></script>

    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../css/stylehome_page.css" />
</head>
<body style="background-image: url('../assets/StyleAssets/Index_bg.jpg');background-size: 1400px 1100px;">
    

<!-- header -->
<!-- 
    <header >
        <div class="container " style="max-width: 100%; background-color: #4B0082;">
            <div class = "row">
                <div class="col-md-4 col-sm-12 text-center">
                    <h2 class="my-md-3 site title text-white" style="float: left; font-weight: bold; font-family: cursive;">Merchfact Private Ltd..</h2>
                </div>
                <div class = "col-md-8 col-sm-12 col-12" style="margin-top: 1rem!important;font-size: 1.3rem;">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle text-white" style="background-color: transparent;width: 200px; font-size: 0.9em;"
                        data-toggle = "dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">
                        Our Fandoms</button>
                        <div class="dropdown-menu">
                            <a href="harrypotter.php" class="dropdown-item" style="background-color:#4B0082; color:white; font-size: 1em;width: 200px; font-weight: bold;">HARRY POTTER</a>
                            <a href="blackpink.php" class="dropdown-item" style="background-color:#4B0082; color:white; font-size: 1em;width: 200px; font-weight: bold;">BLACK PINK</a>
                            <a href="BTS.php" class="dropdown-item" style="background-color:#4B0082; color:white; font-size: 1em;width: 200px; font-weight: bold;">BEYOND THE SCENE</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle text-white" style="background-color: transparent;width: 200px; font-size: 0.9em;"
                        data-toggle = "dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">
                        My Cart</button>
                        <div class="dropdown-menu">
                        <a href="./Billing.php" class="dropdown-item" style="background-color:#4B0082; color:white; font-size: 1em;width: 200px; font-weight: bold;">Proceed to Checkout</a>
                        </div>
                    </div>
                    <button class="btn border text-white" style="background-color: transparent; font-size: 0.9em;width: 150px;"
                    onclick="window.location.href='ShoppingHistoryPage.php'">
                    Search</button>
                    <button class="btn border text-white" style="background-color: transparent; font-size: 0.9em;width: 200px;"
                    onclick="window.location.href='ChangePassword.php'">
                    Change Password</button>
                    <button class="btn border text-white" style="background-color: transparent; font-size: 0.9em;width: 150px;"
                    onclick="window.location.href='index.php'">
                    Logout</button> 
                </div>
            </div>
        </div>
    </header> -->
    <header >
        <div class="container " style="max-width: 100%; background-color: white">
            <div class = "row">
                <div class="col-md-4 col-sm-12 text-center">
                <a href="Home.php"> <h1 class="my-md-3 site title text-black" style="float: left;color:black; font-size:3.5em;font-weight: bold; font-family:Times New Roman;">BeyondTheFrame</h1></a>
                </div>
                <div class = "col-md-8 col-sm-12 col-12" style="margin-top: 1rem!important;font-size: 1.3rem;">
                    <!-- <div class="btn-group">
                        <button class="btn border dropdown-toggle text-white" style="background-color: transparent;width: 200px; font-size: 0.9em;"
                        data-toggle = "dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">
                        Our Fandoms</button>
                        <div class="dropdown-menu">
                            <a href="Product.php" class="dropdown-item" style="background-color:#4B0082; color:white; font-size: 1em;width: 200px; font-weight: bold;">HARRY POTTER</a>
                             </div>
                    </div> -->
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle text-black" style="background-color: transparent;color:black;width: 150px; font-size: 0.9em;"
                        data-toggle = "dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">
                        Categories</button>
                        <div class="dropdown-menu">
                            <a href="TechAccessories.php" class="dropdown-item" style="background-color:white; color:black; font-size: 0.9em;width: 200px; font-weight: bold;">Tech Accessories</a>
                            <a href="HomeDecor.php" class="dropdown-item" style="background-color:white; color:black; font-size: 0.9em;width: 200px; font-weight: bold;">Home & Decor</a>
                            <a href="BookSupplies.php" class="dropdown-item" style="background-color:white; color:black; font-size: 0.9em;width: 200px; font-weight: bold;">Book Supplies</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle text-black" style="background-color: transparent;width: 150px; font-size: 0.9em;"
                        data-toggle = "dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">
                        My Cart</button>
                        <div class="dropdown-menu">
                        <a href="./Billing.php" class="dropdown-item" style="background-color:white; color:black; font-size:0.9em;width: 150px; font-weight: bold;">Checkout</a>
                        </div>
                    </div>
                    <button class="btn border text-black" style="background-color: transparent; font-size: 0.9em;width: 150px;"
                    onclick="window.location.href='ShoppingHistoryPage.php'">
                    Search</button>
                    <button class="btn border text-black" style="background-color: transparent; font-size: 0.9em;width: 200px;"
                    onclick="window.location.href='ChangePassword.php'">
                    Change Password</button>
                    <button class="btn border text-black" style="background-color: transparent; font-size: 0.9em;width: 150px;"
                    onclick="window.location.href='index.php'">
                    Logout</button> 
                </div>
            </div>
        </div>
    </header>

    <!-- /header -->

    <!-- Main Section-->

    <main class="backgroundimageclass">
        <!-- First Slider-->
        <div class="container-fluid " style="width: 80%;padding-top: 50px;"> 
            <form class="example" method="POST" action="ShoppingHistoryPage.php">
                <input type="text" placeholder="Search.." name="SearchBillingHistory" style="box-shadow: 2px 2px 2px 2px grey;">
                <button type="submit" name="SearchBtn" style="box-shadow: 2px 2px 2px 2px grey;"><i class="fa fa-search"></i></button>
            </form> 
            <div style="color: red;"> 
                <?php 
                    if ($SearchDataEntered) {
                        echo "Please Enter Search Data";
                    }
                ?>
            </div> 
            <?php 
            if(count($SearchedBillingRecord)>0)
            {?>
            <table id="billing">            
                <tr>
                    <th>BillingID</th>
                    <th>DeliveryCharges</th>
                    <th>TotalAmount</th> 
                    <th>ProductTotal</th>
                    <th>PaymentType</th>
                </tr>
        
                <?php    
                 
                for ($i = 0; $i < count($SearchedBillingRecord); $i++)
                {  
                ?>
                <tr> 
                    <td><?php echo $SearchedBillingRecord[$i]["BillingID"]; ?></td>
                    <td><?php echo $SearchedBillingRecord[$i]["DeliveryCharges"]; ?></td>
                    <td><?php echo $SearchedBillingRecord[$i]["TotalAmount"]; ?></td> 
                    <td><?php echo $SearchedBillingRecord[$i]["ProductTotal"]; ?></td> 
                    <td><?php echo $SearchedBillingRecord[$i]["PaymentType"]; ?></td>
                    
                </tr>
                <?php 
                }
                ?>
            </table> 
            <?php  }?>
            <?php 
                if ((count($SearchedBillingRecord) == 0) && !$SearchClicked) 
                {
                    echo "No results found";
                } 
            ?>
    <!-- /First Slider-->
   
    </div>
 
    </main>

    <!-- /Main Section-->


    <footer id="footer" class="footer" style="background-color: #7c3042;box-shadow: 15px 15px 15px 15px black; height: 100px;width: 100%100%;">
        <div class="container footer-container" align="center">
            <div class="footer-col-half">
                <p>
                    <i class="fa fa-map"></i> 
                    1st Floor Ideal venue, Main University Road, Block 1, Gulistan-e-Johar, Karachi(75270)-Sindh
                </p>
                <p>
                    Copyright
                    <script>
                        document.write(new Date().getFullYear());
                    </script>All rights reserved |BeyondtheFrame
                </p>
            </div>
            <div class="footer-col-last" >
                <p>
                    <i class="fa fa-envelope">  </i> BeyondtheFrame@gmail.com |
                    <i class="fa fa-phone-square">  </i> +92-5556665501 (Ext.2682)
                </p>
                </div>
            </div>
        </div>
    </footer> 

 <!--<footer> class="footer"</footer>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script> 
</body>
</html> 