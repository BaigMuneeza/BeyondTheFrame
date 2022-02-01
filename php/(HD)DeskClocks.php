<!-- 64 till 72 -->
<?php
include("connection.php");
session_start();
//for every add to cart button(start)
if(isset($_GET['addC64'])){

    $quant64=mysqli_real_escape_string($conn,$_GET['quant64'] );  
    $_SESSION["quant64"] =$quant64;
    $quant64=$_SESSION["quant64"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='classy - Desk Clock' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName= 'classy - Desk Clock' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant64;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant64','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC65'])){

    $quant65=mysqli_real_escape_string($conn,$_GET['quant65'] );  
    $_SESSION["quant65"] =$quant65;
    $quant65=$_SESSION["quant65"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Flower - Desk Chain' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Flower - Desk Chain' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant65;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant65','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC66'])){

    $quant66=mysqli_real_escape_string($conn,$_GET['quant66'] );  
    $_SESSION["quant66"] =$quant66;
    $quant66=$_SESSION["quant66"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Funky - Desk Clock' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Funky - Desk Clock' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant66;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant66','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC67'])){

    $quant67=mysqli_real_escape_string($conn,$_GET['quant67'] );  
    $_SESSION["quant67"] =$quant67;
    $quant67=$_SESSION["quant67"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Happy time 15 Minutes - Sand Timer' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Happy time 15 Minutes - Sand Timer' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant67;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant67','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC68'])){

    $quant68=mysqli_real_escape_string($conn,$_GET['quant68'] );  
    $_SESSION["quant68"] =$quant68;
    $quant68=$_SESSION["quant68"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='matte Style - Desk Clock' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='matte Style - Desk Clock' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant68;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant68','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC69'])){

    $quant69=mysqli_real_escape_string($conn,$_GET['quant69'] );  
    $_SESSION["quant69"] =$quant69;
    $quant69=$_SESSION["quant69"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Metallic Vintage - Desk Clock' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Metallic Vintage - Desk Clock' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant69;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant69','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC70'])){

    $quant70=mysqli_real_escape_string($conn,$_GET['quant70'] );  
    $_SESSION["quant70"] =$quant70;
    $quant70=$_SESSION["quant70"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BLACKPINK Galaxy Logo Mug' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BLACKPINK Galaxy Logo Mug' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant70;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant70','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC71'])){

    $quant71=mysqli_real_escape_string($conn,$_GET['quant71'] );  
    $_SESSION["quant71"] =$quant71;
    $quant71=$_SESSION["quant71"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BLACKPINK THE ALBUM Album Art Pouch' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BLACKPINK THE ALBUM Album Art Pouch' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant71;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant71','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC72'])){

    $quant72=mysqli_real_escape_string($conn,$_GET['quant72'] );  
    $_SESSION["quant72"] =$quant72;
    $quant72=$_SESSION["quant72"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName= 'BLACKPINK DDU DU DDU DU MV Fanart Cushion' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName= 'BLACKPINK DDU DU DDU DU MV Fanart Cushion' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant72;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant72','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/b010d9c86d.js" crossorigin="anonymous"></script>

    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../css/stylehome_page.css" />
    <link rel="stylesheet" href="../css/styleproduct.css" />
    <title>Desk Clocks</title>
    <style>
 
    </style>
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
                <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Desk Clocks/classy - Desk Clock.PNG" class="center1">
                <h2>AVAILABLE</h2>
                <h4>Classy Clock</h4>
                <h3>Rs 1200.00</h3>
                <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant64" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            
            <input type="submit" value="Add to cart" name= "addC64" class="btn solid"/></div>
            </form>
     
        </div>
    
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Desk Clocks/Flower - Desk Chain.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Flower Clocks</h4>
            <h3>Rs 1200.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant65" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC65" class="btn solid"/></div>
            </form>
      
        </div>
            
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Desk Clocks/Funky - Desk Clock.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Funky CLocks</h4>
            <h3>Rs 1300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant66" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC66" class="btn solid"/></div>
            </form>
     
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Home and Decor/Desk Clocks/Happy time 15 Minutes - Sand Timer.PNG" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>Happy time</h4>
            <h3>Rs 1300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant67" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC67" class="btn solid"/></div>
            </form>
     
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Desk Clocks/matte Style - Desk Clock.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Matte Clocks</h4>
            <h3>Rs 1300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant68" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC68" class="btn solid"/></div>
            </form>
     
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Desk Clocks/Metallic Vintage - Desk Clock.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Metallic Vintage</h4>
            <h3>Rs 1300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant69" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC69" class="btn solid"/></div>
            </form>
     
        </div>
<!-- 
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Desk Clocks/Metallic Vintage Gold and Rsoe Gold - Desk Clock.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>BLACKPINK Galaxy Logo Mug</h4>
            <h3>Rs 1300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant70" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC70" class="btn solid"/></div>
            </form>
     
        </div>

        <div class="item1">
            <img src = "../assets/bp(a8).jfif" class="center1">
            <h2>AVAILABLE</h2>
            <h4>BLACKPINK 'THE ALBUM' Album Art Pouch</h4>
            <h3>Rs 700.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant71" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
            <input type="submit" value="Add to cart" name= "addC71" class="btn solid"/></div>
            </form>
     
        </div>

        <div class="item1">
            <img src = "../assets/bp(a9).jfif" class="center1">
            <h2>AVAILABLE</h2>
            <h4>BLACKPINK'DDU DU DDU DU' MV Fanart Cushion </h4>
            <h3>Rs 850.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant72" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC72" class="btn solid"/></div>
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