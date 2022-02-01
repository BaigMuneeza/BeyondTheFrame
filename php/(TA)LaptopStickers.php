<!-- 46 till 54 -->
<?php
include("connection.php");
session_start();

//for every add to cart button(start)
if(isset($_GET['addC46'])){

    $quant46=mysqli_real_escape_string($conn,$_GET['quant46'] );  
    $_SESSION["quant46"] =$quant46;
    $quant46=$_SESSION["quant46"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Be You Tiful - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName= 'Be You Tiful - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant46;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant46','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC47'])){

    $quant47=mysqli_real_escape_string($conn,$_GET['quant47'] );  
    $_SESSION["quant47"] =$quant47;
    $quant47=$_SESSION["quant47"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Believe - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Believe - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant47;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant47','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC48'])){

    $quant48=mysqli_real_escape_string($conn,$_GET['quant48'] );  
    $_SESSION["quant48"] =$quant48;
    $quant47=$_SESSION["quant48"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Cheeky Sheep - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Cheeky Sheep - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant48;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant48','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC49'])){

    $quant49=mysqli_real_escape_string($conn,$_GET['quant49'] );  
    $_SESSION["quant49"] =$quant49;
    $quant49=$_SESSION["quant49"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Faith - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Faith - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant49;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant49','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC50'])){

    $quant50=mysqli_real_escape_string($conn,$_GET['quant50'] );  
    $_SESSION["quant50"] =$quant50;
    $quant50=$_SESSION["quant50"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Focus - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Focus - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant50;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant50','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC51'])){

    $quant51=mysqli_real_escape_string($conn,$_GET['quant51'] );  
    $_SESSION["quant51"] =$quant51;
    $quant51=$_SESSION["quant51"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='You go Girl - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='You go Girl - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant51;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant51','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC52'])){

    $quant52=mysqli_real_escape_string($conn,$_GET['quant52'] );  
    $_SESSION["quant52"] =$quant52;
    $quant52=$_SESSION["quant52"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='HARRRY POTTER SCARF HAT AND GLOVES' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='HARRRY POTTER SCARF HAT AND GLOVES' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant52;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant52','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC53'])){

    $quant53=mysqli_real_escape_string($conn,$_GET['quant53'] );  
    $_SESSION["quant53"] =$quant53;
    $quant53=$_SESSION["quant53"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='HARRY POTTER WHITE TEE SHIRT' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='HARRY POTTER WHITE TEE SHIRT' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant53;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant53','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC54'])){

    $quant54=mysqli_real_escape_string($conn,$_GET['quant54'] );  
    $_SESSION["quant54"] =$quant54;
    $quant54=$_SESSION["quant54"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName= 'HARRY POTTER SHIRT FOR KIDS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='HARRY POTTER SHIRT FOR KIDS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant54;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant54','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laptop Stickers</title>
     
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
     <!-- Font Awesome CDN -->
     <script src="https://kit.fontawesome.com/b010d9c86d.js" crossorigin="anonymous"></script>
 
     <!--Slick Slider-->
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
 
     <!-- Custom StyleSheet -->
     <link rel="stylesheet" href="../css/stylehome_page.css" />
     <link rel="stylesheet" href="../css/styleproduct.css" />
</head>
<body style="background-color:rgb(255, 209, 220)">
    
    <!-- header -->
    
    <header >
        <div class="container " style="max-width: 100%; background-color: white">
            <div class = "row">
                <div class="col-md-4 col-sm-12 text-center">
                <a href="Home.php"> <h1 class="my-md-3 site title text-black" style="float: left;color:black; font-size:3.5em;font-weight: bold; font-family:Times New Roman;">BeyondTheFrame</h1></a>
                </div>
                <div class = "col-md-8 col-sm-12 col-12" style="margin-top: 1rem!important;font-size: 1.3rem;">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle text-black" style="background-color: transparent;color:black;width: 150px; font-size: 0.9em;"
                        data-toggle = "dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">
                        Categories</button>
                        <div class="dropdown-menu">
                            <a href="TechAccessories.php" class="dropdown-item" style="background-color:rgb(255, 209, 220); color:black;margin-bottom:0.3em; font-size: 0.9em;width: 160px;">Tech Accessories</a>
                            <a href="HomeDecor.php" class="dropdown-item" style="background-color:rgb(255, 209, 220); color:black;margin-bottom:0.3em; font-size: 0.9em;width: 160px; ">Home & Decor</a>
                            <a href="BookSupplies.php" class="dropdown-item" style="background-color:rgb(255, 209, 220); color:black; font-size: 0.9em;width: 160px;">Book Supplies</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle text-black" style="background-color: transparent;width: 150px; font-size: 0.9em;"
                        data-toggle = "dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">
                        My Cart</button>
                        <div class="dropdown-menu">
                        <a href="./Billing.php" class="dropdown-item" style="background-color:rgb(255, 209, 220); color:black; font-size:0.9em;width: 160px;">Checkout</a>
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
    <div class="container1">
        <div class="item1">
                <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Stickers/Be You Tiful - LS.PNG" class="center1">
                <h2>AVAILABLE</h2>
                <h4>Be You Tiful</h4>
                <h3>Rs 200.00</h3>
                <form action="#" class="#" method="GET">
            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant46" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            
            <input type="submit" value="Add to cart" name= "addC46" class="btn solid"/></div>
            </form>
        </div>

    
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Stickers/Believe - LS.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Believe</h4>
            <h3>Rs 200.00</h3>
            <form action="#" class="#" method="GET">

            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant47" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
            <input type="submit" value="Add to cart" name= "addC47" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Stickers/Cheeky Sheep - LS.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Cheeky Sheep</h4>
            <h3>Rs 200.00</h3>
            <form action="#" class="#" method="GET">

            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant48" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            <input type="submit" value="Add to cart" name= "addC48" class="btn solid"/></div>
            </form>
        </div>


        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Stickers/Faith - LS.PNG" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>Faith</h4>
            <h3>Rs 200.00</h3>
            <form action="#" class="#" method="GET">

            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant49" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC49" class="btn solid"/></div>
            </form>
        </div>


        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Tech acessories/Laptop Stickers/Focus - LS.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Focus</h4>
            <h3>Rs 200.00</h3>
            <form action="#" class="#" method="GET">

            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant50" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC50" class="btn solid"/></div>
            </form>
        </div>


        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Stickers/You go Girl - LS.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>You go Girl</h4>
            <h3>Rs 200.00</h3>
            <form action="#" class="#" method="GET">

            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant51" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC51" class="btn solid"/></div>
            </form>
        </div>


        <!-- <div class="item1">
            <img style="width:90%;height:60%; "src = "../assets/Tech acessories/Laptop Stickers/You go Girl - LS.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>You go Girl</h4>
            <h3>Rs 200.00</h3>
            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant52" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC52" class="btn solid"/></div>
            </form>
        </div> -->


        <!-- <div class="item1">
            <img src = "../assets/c8.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>HARRY POTTER WHITE TEE SHIRT</h4>
            <h3>Rs 550.00</h3>
            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant53" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC53" class="btn solid"/></div>
            </form>
        </div>


        <div class="item1">
            <img src = "../assets/c9.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>HARRY POTTER SHIRT FOR KIDS </h4>
            <h3>Rs 450.00</h3>
            <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant54" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC54" class="btn solid"/></div>
            </form>
        </div>
         -->
    </div>

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