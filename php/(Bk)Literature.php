<?php
include("connection.php");
session_start();

//for every add to cart button(start)
if(isset($_GET['addC1'])){

    $quant1=mysqli_real_escape_string($conn,$_GET['quant1'] );  
    $_SESSION["quant1"] =$quant1;
    $quant1=$_SESSION["quant1"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Carnaval-Bk' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Carnaval-Bk' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant1;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant1','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    // header('location:(BK)Literature.php');
         

}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC2'])){

    $quant2=mysqli_real_escape_string($conn,$_GET['quant2'] );  
    $_SESSION["quant2"] =$quant2;
    $quant2=$_SESSION["quant2"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Pride&Perjudice-Bk' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Pride&Perjudice-Bk' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant2;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant2','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    // header('location:(BK)Literature.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC3'])){

    $quant3=mysqli_real_escape_string($conn,$_GET['quant3'] );  
    $_SESSION["quant3"] =$quant3;
    $quant3=$_SESSION["quant3"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='RedQueen-Bk' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='RedQueen-Bk' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant3;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant3','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Literature.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC4'])){

    $quant4=mysqli_real_escape_string($conn,$_GET['quant4'] );  
    $_SESSION["quant4"] =$quant4;
    $quant4=$_SESSION["quant4"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='SixOfCrows-Bk' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='SixOfCrows-Bk' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant4;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant4','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Literature.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC5'])){

    $quant5=mysqli_real_escape_string($conn,$_GET['quant5'] );  
    $_SESSION["quant5"] =$quant5;
    $quant5=$_SESSION["quant5"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='TheKiteRunner-Bk' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='TheKiteRunner-Bk' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant5;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant5','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Literature.php');

}
//for every add to cart button(start)
if(isset($_GET['addC6'])){

    $quant6=mysqli_real_escape_string($conn,$_GET['quant6'] );  
    $_SESSION["quant6"] =$quant6;
    $quant6=$_SESSION["quant6"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='WeWereLiars-Bk' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='WeWereLiars-Bk' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant6;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant6','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Literature.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC7'])){

    $quant7=mysqli_real_escape_string($conn,$_GET['quant7'] );  
    $_SESSION["quant7"] =$quant7;
    $quant7=$_SESSION["quant7"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BLACKPINK Logo Sticker' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BLACKPINK Logo Sticker'' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant7;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant7','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Literature.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC8'])){

    $quant8=mysqli_real_escape_string($conn,$_GET['quant8'] );  
    $_SESSION["quant8"] =$quant8;
    $quant8=$_SESSION["quant8"] ;//quantity of product
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
            $Tprice=$price * $quant8;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant8','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Literature.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC9'])){

    $quant9=mysqli_real_escape_string($conn,$_GET['quant9'] );  
    $_SESSION["quant9"] =$quant9;
    $quant9=$_SESSION["quant9"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BLACKPINK Pink Logo Sticker' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BLACKPINK Pink Logo Sticker' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant9;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant9','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(BK)Literature.php');
         

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Literature</title>
    
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
                <img style="width:90%;height:60%;"src = "../assets/Books/Novels/Carnaval-Bk.jpg" class="center1">
                <h2>AVAILABLE</h2>
                <h4>Carnaval</h4>
                <h3>Rs 500.00</h3>

                <form action="#" class="#" method="GET">
                    <div class="quantity">
                        <input type="number" id="quantity" name="quant1" step="1" min="1" max="5" value="1"   placeholder="" inputmode="numeric">
                        <input type="submit" value="Add to cart" name= "addC1" class="btn solid" /></div>
                    </form>
        </div>
            

            
        
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Novels/Pride&Perjudice-Bk.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Pride & Perjudice</h4>
            <h3>Rs 450.00</h3>

            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant2" class="input-text qty text" step="1" min="1" max="5" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
                    <input type="submit" value="Add to cart" name= "addC2" class="btn solid"/></div>
            </form>
        </div>
            
        
        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Novels/RedQueen-Bk.jpeg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Red Queen</h4>
            <h3>Rs 350.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant3" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC3" class="btn solid"/></div>
            </form>

            
            <!-- //<button type="submit" class="add_to_cart_button">Add to cart</button> -->
            

        </div>
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Novels/SixOfCrows-Bk.jpg" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>Six Of Crows</h4>
            <h3>Rs 350.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant4" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC4" class="btn solid"/></div>
            </form>
            
            <!-- <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Books/Novels/TheKiteRunner-Bk.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>The Kite Runner</h4>
            <h3>Rs 400.00</h3>

            <form action="#" class="#" method="GET">
            <div class="quantity"><input type="number" id="quantity_60e94fb32487e" name="quant5" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            <input type="submit" value="Add to cart" name= "addC5" class="btn solid"/></div>
            </form>
            
            <!-- <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div>


        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Novels/WeWereLiars-Bk.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>We Were Liars</h4>
            <h3>Rs 350.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant6"class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
       
            <input type="submit" value="Add to cart" name= "addC6" class="btn solid"/></div>
            </form>

            
            <!-- <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div>

        <!-- <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Novels/WeWereLiars-Bk.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4>WeWereLiars</h4>
            <h3>Rs 350.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant7"class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
         
            <input type="submit" value="Add to cart" name= "addC7" class="btn solid"/></div>
            </form>
           //  <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        <!-- </div> --> 

        <!-- <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Novels/Carnaval-Bk.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4> BTS Sticker</h4>
            <h3>Rs 10.00</h3>
            <form action="#" class="#" method="GET">
            <div class="quantity">
                <input type="number" id="quantity_60e94fb32487e" name="quant8" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
            
            <input type="submit" value="Add to cart" name= "addC8" class="btn solid"/></div>
            </form>
            
             //<button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div> -->
        
        <!-- <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Books/Novels/Carnaval-Bk.jpg" class="center1">
            <h2>AVAILABLE</h2>
            <h4> BTS 'LOVE YOURSELF' Sticker</h4>
            <h3>Rs 15.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
                    <input type="number" id="quantity_60e94fb32487e" name="quant9" class="input-text qty text" step="1" min="1" max="5" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
           
                    <input type="submit" value="Add to cart" name= "addC9" class="btn solid"/></div>
            </form>
            
             <button type="submit" class="add_to_cart_button">Add to cart</button> -->
        </div>  -->
        
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
