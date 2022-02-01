<?php
include("connection.php");

session_start();

//for every add to cart button(start)
if(isset($_GET['addC28'])){

    $quant28=mysqli_real_escape_string($conn,$_GET['quant28'] );  
    $_SESSION["quant28"] =$quant28;
    $quant28=$_SESSION["quant28"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Lilac Sillicone - Mobile Cover' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID                
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
         
        $sql11= "Select ProductPrice From productdetails Where productName= 'Lilac Sillicone - Mobile Cover' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant28;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant28','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

    
}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC29'])){

    $quant29=mysqli_real_escape_string($conn,$_GET['quant29'] );  
    $_SESSION["quant29"] =$quant29;
    $quant29=$_SESSION["quant29"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Maroon Sillicone - Mobile Cover' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Maroon Sillicone - Mobile Cover' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant29;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant29','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC30'])){

    $quant30=mysqli_real_escape_string($conn,$_GET['quant30'] );  
    $_SESSION["quant30"] =$quant30;
    $quant30=$_SESSION["quant30"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Orange Sillicone - Mobile Cover' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Orange Sillicone - Mobile Cover' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant30;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant30','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC31'])){

    $quant31=mysqli_real_escape_string($conn,$_GET['quant31'] );  
    $_SESSION["quant31"] =$quant31;
    $quant31=$_SESSION["quant31"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='3RWB-Mobile Cover' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='3RWB-Mobile Cover' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant31;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant31','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC32'])){

    $quant32=mysqli_real_escape_string($conn,$_GET['quant32'] );  
    $_SESSION["quant32"] =$quant32;
    $quant32=$_SESSION["quant32"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Cacti-Mobile Cover' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Cacti-Mobile Cover' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant32;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant32','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC33'])){

    $quant33=mysqli_real_escape_string($conn,$_GET['quant33'] );  
    $_SESSION["quant33"] =$quant33;
    $quant33=$_SESSION["quant33"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Floral-Mobile Cover' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Floral-Mobile Cover' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant33;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant33','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
// //for every add to cart button(start)
if(isset($_GET['addC34'])){

    $quant34=mysqli_real_escape_string($conn,$_GET['quant34'] );  
    $_SESSION["quant34"] =$quant34;
    $quant34=$_SESSION["quant34"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='HARRY POTTER QUIDDITCH Sticker' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='HARRY POTTER QUIDDITCH Sticker' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant34;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant34','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC35'])){

    $quant35=mysqli_real_escape_string($conn,$_GET['quant35'] );  
    $_SESSION["quant35"] =$quant35;
    $quant35=$_SESSION["quant35"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='HARRY POTTER Sticker' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='HARRY POTTER Sticker' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant35;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant35','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC36'])){

    $quant36=mysqli_real_escape_string($conn,$_GET['quant36'] );  
    $_SESSION["quant36"] =$quant36;
    $quant36=$_SESSION["quant36"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName= 'HARRY POTTER SEVERUS SNAP Sticker' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='HARRY POTTER SEVERUS SNAP Sticker' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant36;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant36','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Covers</title>
    
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
                <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Mobile Covers/Lilac Sillicone - Mobile Cover.PNG" class="center1">
                <h2>AVAILABLE</h2>
                <h4>Lilac Sillicone</h4>
                <h3>Rs 1300.00</h3>
                <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant28" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC28" class="btn solid"/></div>
            </form>

        </div>
    
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Mobile Covers/Maroon Sillicone - Mobile Cover.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Maroon Sillicone</h4>
            <h3>Rs 1250.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant29" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC29" class="btn solid"/></div>
            </form>

        </div>
       
        
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Mobile Covers/Orange Sillicone - Mobile Cover.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Orange Sillicone</h4>
            <h3>Rs 1250.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant30" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC30" class="btn solid"/></div>
            </form>
            </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Mobile Covers/3RWB-Mobile Cover.jpg" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>3RWB Cover</h4>
            <h3>Rs 1400.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant31" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC31" class="btn solid"/></div>
            </form>

        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Mobile Covers/Cacti-Mobile Cover.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Cacti</h4>
            <h3>Rs 1400.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant32" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC32" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Tech acessories/Mobile Covers/Floral-Mobile Cover.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Floral</h4>
            <h3>Rs 1350.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant33" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC33" class="btn solid"/></div>
            </form>

        </div>

        <!-- <div class="item1">
            <img src = "../assets/hp7.png" class="center1">
            <h2>AVAILABLE</h2>
            <h4>HARRY POTTER 'QUIDDITCH' Sticker</h4>
            <h3>Rs 10.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant34" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
            <input type="submit" value="Add to cart" name= "addC34" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img src ="../assets/hp8.jfif"bp8.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>HARRY POTTER Sticker</h4>
            <h3>Rs 10.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant35" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC35" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img src = "../assets/hp9.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>HARRY POTTER 'SEVERUS SNAP' Sticker </h4>
            <h3>Rs 10.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant36" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
            <input type="submit" value="Add to cart" name= "addC36" class="btn solid"/></div>
            </form>
        </div> -->
        
    </div>
    

<footer id="footer" class="footer" style="background-color: #7c3042;box-shadow: 15px 15px 15px 15px black;">
    <div class="container footer-container" align="center1">
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