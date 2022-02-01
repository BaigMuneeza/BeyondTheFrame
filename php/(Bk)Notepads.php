<?php
include("connection.php");
session_start();

//for every add to cart button(start)
if(isset($_GET['addC19'])){

    $quant19=mysqli_real_escape_string($conn,$_GET['quant19'] );  
    $_SESSION["quant19"] =$quant19;
    $quant19=$_SESSION["quant19"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Kraft Series - Journal' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Kraft Series - Journal' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant19;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant19','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Notepads.php');
         

}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC20'])){

    $quant20=mysqli_real_escape_string($conn,$_GET['quant20'] );  
    $_SESSION["quant20"] =$quant20;
    $quant20=$_SESSION["quant20"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Motivational Series - Notepad' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Motivational Series - Notepad' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant20;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant20','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Notepads.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC21'])){

    $quant21=mysqli_real_escape_string($conn,$_GET['quant21'] );  
    $_SESSION["quant21"] =$quant21;
    $quant21=$_SESSION["quant21"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Pretty Little Thoughts - Journal' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Pretty Little Thoughts - Journal' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant21;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant21','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Notepads.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC22'])){

    $quant22=mysqli_real_escape_string($conn,$_GET['quant22'] );  
    $_SESSION["quant22"] =$quant22;
    $quant22=$_SESSION["quant22"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Ramadan Series - Journal' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Ramadan Series - Journal' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant22;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant22','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Notepads.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC23'])){

    $quant23=mysqli_real_escape_string($conn,$_GET['quant23'] );  
    $_SESSION["quant23"] =$quant23;
    $quant23=$_SESSION["quant23"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='whimsy - Notepad' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='whimsy - Notepad' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant23;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant23','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Notepads.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC24'])){

    $quant24=mysqli_real_escape_string($conn,$_GET['quant24'] );  
    $_SESSION["quant24"] =$quant24;
    $quant24=$_SESSION["quant24"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='SpaceSet-Journal' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='SpaceSet-Journal' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant24;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant24','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Notepads.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC25'])){

    $quant25=mysqli_real_escape_string($conn,$_GET['quant25'] );  
    $_SESSION["quant25"] =$quant25;
    $quant25=$_SESSION["quant25"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BTS LOVE YOURSELF TEAR Logo Shirt' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BTS LOVE YOURSELF TEAR Logo Shirt' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant25;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant25','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    
         

}
//for every add to cart button(start)
if(isset($_GET['addC26'])){

    $quant26=mysqli_real_escape_string($conn,$_GET['quant26'] );  
    $_SESSION["quant26"] =$quant26;
    $quant26=$_SESSION["quant26"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BTS ARMY Flower Print Logo Shirt' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BTS ARMY Flower Print Logo Shirt' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant26;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant26','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC27'])){

    $quant27=mysqli_real_escape_string($conn,$_GET['quant27'] );  
    $_SESSION["quant27"] =$quant27;
    $quant27=$_SESSION["quant27"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BTS JUNGKOOK Fire Logo Shirt' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BTS JUNGKOOK Fire Logo Shirt' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant27;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant27','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notepads</title>
    
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
                <img style="width:90%;height:60%;" src = "../assets/Books/Notepads/Kraft Series - Journal.PNG" class="center1">
                <h2>AVAILABLE</h2>
                <h4>Kraft Series</h4>
                <h3>Rs 300.00</h3>
                <form action="#" class="#" method="GET">
                    <div class="quantity">
                        <input type="number" id="quantity_60e94fb32487e" name="quant19" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
                        <input type="submit" value="Add to cart" name= "addC19" class="btn solid"/>
                    </div>
                </form>
            
            
            
        
        </div>
            
        
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Notepads/Motivational Series - Notepad.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Motivational Series</h4>
            <h3>Rs 250.00</h3>

            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant20" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
                    <input type="submit" value="Add to cart" name= "addC20" class="btn solid"/></div>
            </form>
            
        </div>
            
            
        
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Notepads/Pretty Little Thoughts - Journal.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Pretty Little Thoughts</h4>
            <h3>Rs 250.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant21" class="input-text qty text" step="1" min="1" max="5" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
                    <input type="submit" value="Add to cart" name= "addC21" class="btn solid"/></div>
            </form>
            

        </div>
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Notepads/Ramadan Series - Journal.PNG" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>Ramadan Series</h4>
            <h3>Rs 300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant22" class="input-text qty text" step="1" min="1" max="5" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
                    <input type="submit" value="Add to cart" name= "addC22" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Notepads/whimsy - Notepad.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Whimsy</h4>
            <h3>Rs 150.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant23" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
                    <input type="submit" value="Add to cart" name= "addC23" class="btn solid"/></div>
            </form>


        </div>
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Notepads/SpaceSet-Journal.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>SpaceSet</h4>
            <h3>Rs 350.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant24" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            
                    <input type="submit" value="Add to cart" name= "addC24" class="btn solid"/></div>
            </form>

        </div>


        <!-- <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Notepads/Kraft Series - Journal.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4> BTS ‘LOVE YOURSELF: TEAR’ Logo Shirt</h4>
            <h3>Rs 1,050.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant25" class="input-text qty text" step="1" min="1" max="5" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
                <input type="submit" value="Add to cart" name= "addC25" class="btn solid"/></div>
            </form>

        </div>
        <div class="item1">

            <img style="width:90%;height:60%;" src = "../assets/Books/Notepads/Kraft Series - Journal.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4> BTS ‘ARMY’ Flower Print Logo Shirt</h4>
            <h3>Rs 1,000.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant26" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
                    <input type="submit" value="Add to cart" name= "addC26" class="btn solid"/>
                </div>
            </form>

        </div>
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Notepads/Kraft Series - Journal.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4> BTS ‘JUNGKOOK’ Fire Logo Shirt</h4>
            <h3>Rs 1,200.00</h3>

            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant27" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            
                <input type="submit" value="Add to cart" name= "addC27" class="btn solid"/></div>
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