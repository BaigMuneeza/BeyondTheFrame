<!-- 55 till 63 -->
<?php
include("connection.php");
session_start();

//for every add to cart button(start)
if(isset($_GET['addC55'])){

    $quant55=mysqli_real_escape_string($conn,$_GET['quant55'] );  
    $_SESSION["quant55"] =$quant55;
    $quant55=$_SESSION["quant55"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Basic Style 13 - Ceramic Mug' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName= 'Basic Style 13 - Ceramic Mug' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant55;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant55','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)Mugs.php');
         

}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC56'])){

    $quant56=mysqli_real_escape_string($conn,$_GET['quant56'] );  
    $_SESSION["quant56"] =$quant56;
    $quant56=$_SESSION["quant56"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Basic Style 14 - Ceramic Mug' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Basic Style 14 - Ceramic Mug' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant56;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant56','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)Mugs.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC57'])){

    $quant57=mysqli_real_escape_string($conn,$_GET['quant57'] );  
    $_SESSION["quant57"] =$quant57;
    $quant57=$_SESSION["quant57"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Cute Kitty - Ceramic Mug' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Cute Kitty - Ceramic Mug' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant57;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant57','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)Mugs.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC58'])){

    $quant58=mysqli_real_escape_string($conn,$_GET['quant58'] );  
    $_SESSION["quant58"] =$quant58;
    $quant58=$_SESSION["quant58"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='I love my teacher - Ceramic Mug' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='I love my teacher - Ceramic Mug' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant58;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant58','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)Mugs.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC59'])){

    $quant59=mysqli_real_escape_string($conn,$_GET['quant59'] );  
    $_SESSION["quant59"] =$quant59;
    $quant59=$_SESSION["quant59"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Polar bear - Ceramic Mug Set' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Polar bear - Ceramic Mug Set' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant59;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant59','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)Mugs.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC60'])){

    $quant60=mysqli_real_escape_string($conn,$_GET['quant60'] );  
    $_SESSION["quant60"] =$quant60;
    $quant60=$_SESSION["quant60"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Self Motivation - Ceramic Mug' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Self Motivation - Ceramic Mug' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant60;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant60','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)Mugs.php');

}
//for every add to cart button(start)
if(isset($_GET['addC61'])){

    $quant61=mysqli_real_escape_string($conn,$_GET['quant61'] );  
    $_SESSION["quant61"] =$quant61;
    $quant61=$_SESSION["quant61"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Starry Unicorns-Ceramic Mug' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Starry Unicorns-Ceramic Mug' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant61;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant61','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)Mugs.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC62'])){

    $quant62=mysqli_real_escape_string($conn,$_GET['quant62'] );  
    $_SESSION["quant62"] =$quant62;
    $quant62=$_SESSION["quant62"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BLACKPINK Set Of 4 Stickers' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BLACKPINK Set Of 4 Stickers' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant62;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant62','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC63'])){

    $quant63=mysqli_real_escape_string($conn,$_GET['quant63'] );  
    $_SESSION["quant63"] =$quant63;
    $quant63=$_SESSION["quant63"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName= 'BLACKPINK Pink Logo Sticker' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName= 'BLACKPINK Pink Logo Sticker' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant63;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant63','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mugs</title>
    
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
                <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Mugs/Basic Style 13 - Ceramic Mug.PNG" class="center1">
                <h2>AVAILABLE</h2>
                <h4>Basic Style 13</h4>
                <h3>Rs 1300.00</h3>
                <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant55" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
                    
                    
                <input type="submit" value="Add to cart" name= "addC55" class="btn solid"/></div>
            </form>
     
        </div>
    
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Mugs/Basic Style 14 - Ceramic Mug.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Basic Style 14</h4>
            <h3>Rs 1400.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant56" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            
            <input type="submit" value="Add to cart" name= "addC56" class="btn solid"/></div>
            </form>
    
        </div>
       
        
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Home and Decor/Mugs/Cute Kitty - Ceramic Mug.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Cute Kitty</h4>
            <h3>Rs 1350.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant57" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            
            <input type="submit" value="Add to cart" name= "addC57" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Mugs/I love my teacher - Ceramic Mug.PNG" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>Teacher Mug</h4>
            <h3>Rs 1250.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant58" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC58" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Mugs/Polar bear - Ceramic Mug Set.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Polar bear' Sticker</h4>
            <h3>Rs 1300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant59" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC59" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Home and Decor/Mugs/Self Motivation - Ceramic Mug.png" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Self Motivation Mugs</h4>
            <h3>Rs 1350.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant60" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC60" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Mugs/Starry Unicorns-Ceramic Mug.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Starry Unicorns</h4>
            <h3>Rs 1300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant61" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
            <input type="submit" value="Add to cart" name= "addC61" class="btn solid"/></div>
            </form>
        </div>

        <!-- <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/bp8.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>BLACKPINK Set Of 4 Stickers</h4>
            <h3>Rs 50.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant62" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC62" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/bp9.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>BLACKPINK Pink Logo Sticker </h4>
            <h3>Rs 10.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant63" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC63" class="btn solid"/></div>
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