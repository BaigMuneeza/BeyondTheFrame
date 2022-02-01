<?php
include("connection.php");
session_start();

//for every add to cart button(start)
if(isset($_GET['addC37'])){

    $quant37=mysqli_real_escape_string($conn,$_GET['quant37'] );  
    $_SESSION["quant37"] =$quant37;
    $quant37=$_SESSION["quant37"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Hope Endures - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Hope Endures - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant37;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant37','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC38'])){

    $quant38=mysqli_real_escape_string($conn,$_GET['quant38'] );  
    $_SESSION["quant38"] =$quant38;
    $quant38=$_SESSION["quant38"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Necessitea- LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Necessitea- LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant38;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant38','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC39'])){

    $quant39=mysqli_real_escape_string($conn,$_GET['quant39'] );  
    $_SESSION["quant39"] =$quant39;
    $quant39=$_SESSION["quant39"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Never Give Up - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Never Give Up - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant39;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant39','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC40'])){

    $quant40=mysqli_real_escape_string($conn,$_GET['quant40'] );  
    $_SESSION["quant40"] =$quant40;
    $quant40=$_SESSION["quant40"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Retro - LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Retro - LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant40;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant40','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC41'])){

    $quant41=mysqli_real_escape_string($conn,$_GET['quant41'] );  
    $_SESSION["quant41"] =$quant41;
    $quant41=$_SESSION["quant41"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Black marble-LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Black marble-LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant41;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant41','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC42'])){

    $quant42=mysqli_real_escape_string($conn,$_GET['quant42'] );  
    $_SESSION["quant42"] =$quant42;
    $quant42=$_SESSION["quant42"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='floralcyan-LS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='floralcyan-LS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant42;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant42','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC43'])){

    $quant43=mysqli_real_escape_string($conn,$_GET['quant43'] );  
    $_SESSION["quant43"] =$quant43;
    $quant43=$_SESSION["quant43"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='HARRY POTTER Replica Jewellery' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='HARRY POTTER Replica Jewellery' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant43;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant43','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC44'])){

    $quant44=mysqli_real_escape_string($conn,$_GET['quant44'] );  
    $_SESSION["quant44"] =$quant44;
    $quant44=$_SESSION["quant44"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='HARRY POTTER PEN' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName= 'HARRY POTTER PEN' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant44;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant44','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC45'])){

    $quant45=mysqli_real_escape_string($conn,$_GET['quant45'] );  
    $_SESSION["quant45"] =$quant45;
    $quant45=$_SESSION["quant45"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='HARRY POTTER NECLACE' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='HARRY POTTER NECLACE' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant45;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant45','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laptop Skins</title>
    
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
                <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Skins/Hope Endures - LS.PNG" class="center1">
                <h2>AVAILABLE</h2>
                <h4>Hope Endures</h4>
                <h3>Rs 300.00</h3>

                <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant37" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC37" class="btn solid"/></div>
            </form>
     
        </div>
    
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Skins/Necessitea- LS.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Necessitea</h4>
            <h3>Rs 250.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant38" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC38" class="btn solid"/></div>
            </form>

        </div>
       
        
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Tech acessories/Laptop Skins/Never Give Up - LS.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Never Give Up</h4>
            <h3>Rs 280.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant39" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC39" class="btn solid"/></div>
            </form>

            </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Skins/Retro - LS.PNG" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>Retro</h4>
            <h3>Rs 300.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant40" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC40" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Skins/Black marble-LS.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Black marble</h4>
            <h3>Rs 260.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant41" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
        
            <input type="submit" value="Add to cart" name= "addC41" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Laptop Skins/floralcyan-LS.png" class="center1">
            <h2>AVAILABLE</h2>
            <h4>floralcyan</h4>
            <h3>Rs 300.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant42" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC42" class="btn solid"/></div>
            </form>

        </div>

        <!-- <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/a7.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>HARRY POTTER Replica Jewellery</h4>
            <h3>Rs 1,300.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant43" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC43" class="btn solid"/></div>
            </form>

        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/a8.jpeg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>HARRY POTTER PEN</h4>
            <h3>Rs 250.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant44" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC44" class="btn solid"/></div>
            </form>

        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/a9.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>HARRY POTTER NECLACE </h4>
            <h3>Rs 1,000.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant45" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC45" class="btn solid"/></div>
            </form>
        </div> -->
        
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