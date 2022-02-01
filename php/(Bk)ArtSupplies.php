<?php
include("connection.php");
session_start();

//for every add to cart button(start)
if(isset($_GET['addC10'])){

    $quant10=mysqli_real_escape_string($conn,$_GET['quant10'] );  
    $_SESSION["quant10"] =$quant10;
    $quant10=$_SESSION["quant10"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='AnimalBookmark-AS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='AnimalBookmark-AS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant10;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant10','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)ArtSupplies.php');
         

}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC11'])){

    $quant11=mysqli_real_escape_string($conn,$_GET['quant11'] );  
    $_SESSION["quant11"] =$quant11;
    $quant11=$_SESSION["quant11"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='CandyPenSet-AS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='CandyPenSet-AS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant11;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant11','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)ArtSupplies.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC12'])){

    $quant12=mysqli_real_escape_string($conn,$_GET['quant12'] );  
    $_SESSION["quant12"] =$quant12;
    $quant12=$_SESSION["quant12"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Envelopes-AS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Envelopes-AS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant12;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant12','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)ArtSupplies.php');
         
}
//for every add to cart button(start)
if(isset($_GET['addC13'])){

    $quant13=mysqli_real_escape_string($conn,$_GET['quant13'] );  
    $_SESSION["quant13"] =$quant13;
    $quant13=$_SESSION["quant13"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName= 'GlitterGlue-AS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='GlitterGlue-AS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant13;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant13','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)ArtSupplies.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC14'])){

    $quant14=mysqli_real_escape_string($conn,$_GET['quant14'] );  
    $_SESSION["quant14"] =$quant14;
    $quant14=$_SESSION["quant14"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='WashiTape-AS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='WashiTape-AS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant14;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant14','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)ArtSupplies.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC15'])){

    $quant15=mysqli_real_escape_string($conn,$_GET['quant15'] );  
    $_SESSION["quant15"] =$quant15;
    $quant15=$_SESSION["quant15"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='ZipperPounch-AS' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='ZipperPounch-AS' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant15;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant15','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)ArtSupplies.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC16'])){

    $quant16=mysqli_real_escape_string($conn,$_GET['quant16'] );  
    $_SESSION["quant16"] =$quant16;
    $quant16=$_SESSION["quant16"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BTS BE Water Bottle' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BTS BE Water Bottle' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant16;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant16','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    
         

}
//for every add to cart button(start)
if(isset($_GET['addC17'])){

    $quant17=mysqli_real_escape_string($conn,$_GET['quant17'] );  
    $_SESSION["quant17"] =$quant17;
    $quant17=$_SESSION["quant17"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BTS ARMY Logo Magnet Watch' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BTS ARMY Logo Magnet Watch' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant17;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant17','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    
         

}
//for every add to cart button(start)
if(isset($_GET['addC18'])){

    $quant18=mysqli_real_escape_string($conn,$_GET['quant18'] );  
    $_SESSION["quant18"] =$quant18;
    $quant18=$_SESSION["quant18"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BTS SIMPLE ARMY SILVER PLATED Neclace' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BTS SIMPLE ARMY SILVER PLATED Neclace' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant18;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant18','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art Supplies</title>
    
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
                <img  style="width:90%;height:60%;"src = "../assets/Books/Art Supply/AnimalBookmark-AS.jpg" class="center1">
                <h2>AVAILABLE</h2>
                <h4>AnimalBookmark</h4>
                <h3>Rs 300.00</h3>
                <form action="#" class="#" method="GET">
                <div class="quantity"><input type="number" id="quantity" name="quant10" step="1" min="1" max="5" value="1"  placeholder="" inputmode="numeric">
                <input type="submit" value="Add to cart" name= "addC10" class="btn solid" /></div>
                </form>
            
                
                <!-- <button type="submit" >Add to cart</button> -->

        </div>
            
        
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Art Supply/CandyPenSet-AS.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>CandyPenSet</h4>
            <h3>Rs 600.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant11" class="input-text qty text" step="1" min="1" max="5" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            <input type="submit" value="Add to cart" name= "addC11" class="btn solid"/></div>
            </form>
            
            
            
            <!-- <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div>
            
            
        
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Art Supply/Envelopes-AS.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Envelopes</h4>
            <h3>Rs 300.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant12" class="input-text qty text" step="1" min="1" max="5" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC12" class="btn solid"/></div>
            </form>
            <!-- <button type="submit" class="add_to_cart_button">Add to cart</button> -->
            

        </div>
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Art Supply/GlitterGlue-AS.jpg" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>GlitterGlue</h4>
            <h3>Rs 200.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant13" class="input-text qty text" step="1" min="1" max="5" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC13" class="btn solid"/></div>
            </form>
            <!-- <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div>


        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Art Supply/WashiTape-AS.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>WashiTape-AS</h4>
            <h3>Rs 150.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant14" class="input-text qty text" step="1" min="1" max="5" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC14" class="btn solid"/></div>
            </form>

            <!-- <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Art Supply/ZipperPounch-AS.png" class="center1">
            <h2>AVAILABLE</h2>
            <h4>ZipperPounch</h4>
            <h3>Rs 500.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant15" class="input-text qty text" step="1" min="1" max="5" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
            <input type="submit" value="Add to cart" name= "addC15" class="btn solid"/></div>
            </form>
            <!-- <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div>


        <!-- <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Art Supply/AnimalBookmark-AS.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4> BTS ‘BE’ Water Bottle</h4>
            <h3>Rs 1,000.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant16" class="input-text qty text" step="1" min="1" max="5" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
       
            
            <input type="submit" value="Add to cart" name= "addC16" class="btn solid"/></div>
            </form>
            <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        <!-- </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Art Supply/AnimalBookmark-AS.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4> BTS ARMY Logo Magnet Watch</h4>
            <h3>Rs 1,500.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant17" class="input-text qty text" step="1" min="1" max="5" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            
            <input type="submit" value="Add to cart" name= "addC17" class="btn solid"/></div>
            </form>

         <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        <!-- </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Art Supply/AnimalBookmark-AS.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4> BTS SIMPLE ARMY SILVER PLATED Neclace</h4>
            <h3>Rs 1,400.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant18" class="input-text qty text" step="1" min="1" max="5" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
            <input type="submit" value="Add to cart" name= "addC18" class="btn solid"/></div>
            </form>
            <button type="submit" class="add_to_cart_button">Add to cart</button>
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