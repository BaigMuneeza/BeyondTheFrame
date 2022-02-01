<!-- 73 till 81 -->
<?php
include("connection.php");
session_start();
//for every add to cart button(start)

if(isset($_GET['addC73'])){

    $quant73=mysqli_real_escape_string($conn,$_GET['quant73'] );  
    $_SESSION["quant73"] =$quant73;
    $quant73=$_SESSION["quant73"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Artistic Heart - Enamel Pins' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName= 'Artistic Heart - Enamel Pins' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant73;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant73','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)EnamelPins.php');
         

}
//(end)
//for every add to cart button(start)
if(isset($_GET['addC74'])){

    $quant74=mysqli_real_escape_string($conn,$_GET['quant74'] );  
    $_SESSION["quant74"] =$quant74;
    $quant74=$_SESSION["quant74"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Brain - Eyes - Enamel Pins' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Brain - Eyes - Enamel Pins' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant74;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant74','$Tprice')";
    $result111=mysqli_query($conn,$query111);

    header('location:(HD)EnamelPins.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC75'])){

    $quant75=mysqli_real_escape_string($conn,$_GET['quant75'] );  
    $_SESSION["quant75"] =$quant75;
    $quant75=$_SESSION["quant75"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='choose Happy - Enamel Pins' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='choose Happy - Enamel Pins' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant75;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant75','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)EnamelPins.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC76'])){

    $quant76=mysqli_real_escape_string($conn,$_GET['quant76'] );  
    $_SESSION["quant76"] =$quant76;
    $quant76=$_SESSION["quant76"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Final Draft - Enamel Pins' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Final Draft - Enamel Pins' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant76;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant76','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)EnamelPins.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC77'])){

    $quant77=mysqli_real_escape_string($conn,$_GET['quant77'] );  
    $_SESSION["quant77"] =$quant77;
    $quant77=$_SESSION["quant77"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='I knit past my bedtime - Enamel Pins' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='I knit past my bedtime - Enamel Pins' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant77;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant77','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)EnamelPins.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC78'])){

    $quant78=mysqli_real_escape_string($conn,$_GET['quant78'] );  
    $_SESSION["quant78"] =$quant78;
    $quant78=$_SESSION["quant78"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Pharmacist-MAthematician-doctor - Enamel Pins' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Pharmacist-MAthematician-doctor - Enamel Pins' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant78;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant78','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)EnamelPins.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC79'])){

    $quant79=mysqli_real_escape_string($conn,$_GET['quant79'] );  
    $_SESSION["quant79"] =$quant79;
    $quant79=$_SESSION["quant79"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='Pink Man - Enamel Pins' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='Pink Man - Enamel Pins' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant79;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant79','$Tprice')";
    $result111=mysqli_query($conn,$query111);
    header('location:(HD)EnamelPins.php');
         

}
//for every add to cart button(start)
if(isset($_GET['addC80'])){

    $quant80=mysqli_real_escape_string($conn,$_GET['quant80'] );  
    $_SESSION["quant80"] =$quant80;
    $quant80=$_SESSION["quant80"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName='BLACKPINK We Were Born To Be Alone Logo Shirt' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName='BLACKPINK We Were Born To Be Alone Logo Shirt' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant80;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant80','$Tprice')";
    $result111=mysqli_query($conn,$query111);
         

}
//for every add to cart button(start)
if(isset($_GET['addC81'])){

    $quant81=mysqli_real_escape_string($conn,$_GET['quant81'] );  
    $_SESSION["quant81"] =$quant81;
    $quant81=$_SESSION["quant81"] ;//quantity of product
    //change product name in queries
    $sql1= "Select ProductID From productdetails Where productName= 'BLACKPINK Pink Logo In Hangul Shirt' Limit 1";
    $result1=mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1)) {
        $_SESSION["productID"] = $row['ProductID'];}
        $p_ID=$_SESSION["productID"] ;                //product ID
        $cart_id= $_SESSION["CartID"] ;                   //cart ID
        $sql11= "Select ProductPrice From productdetails Where productName= 'BLACKPINK Pink Logo In Hangul Shirt' Limit 1";
        $result11=mysqli_query($conn,$sql11);
        while($row = mysqli_fetch_array($result11)) {
            $_SESSION["Price"] = $row['ProductPrice'];}
            $price=$_SESSION["Price"];                    //price of product
            $Tprice=$price * $quant81;                     //total price for selected quantity
    $query111="INSERT INTO CartQuantity (CartID,ProductID,Quantity,Total) VALUES('$cart_id','$p_ID','$quant81','$Tprice')";
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
    <title>Enamel Pins</title>
     
</head>
<body style="background-color:rgb(255, 209, 220)">
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
                <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Enamel pins/Artistic Heart - Enamel Pins.PNG" class="center1">
                <h2>AVAILABLE</h2>
                <h4>Artistic Heart</h4>
                <h3>Rs 300.00</h3>
                <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant73" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> 
            
            <input type="submit" value="Add to cart" name= "addC73" class="btn solid"/></div>
            </form>
     
        </div>
    
        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Enamel pins/Brain - Eyes - Enamel Pins.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Brain Eyes</h4>
            <h3>Rs 300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant74" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC74" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Home and Decor/Enamel pins/choose Happy - Enamel Pins.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Choose Happy</h4>
            <h3>Rs 250.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant75" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC75" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Enamel pins/Final Draft - Enamel Pins.PNG" class="center1"> 
            <h2>AVAILABLE</h2>
            <h4>Final Draft</h4>
            <h3>Rs 300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant76" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC76" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Enamel pins/I knit past my bedtime - Enamel Pins.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>I knit past my bedtime</h4>
            <h3>Rs 250.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant77" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC77" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;"src = "../assets/Home and Decor/Enamel pins/Pharmacist-MAthematician-doctor - Enamel Pins.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Pharmacist-MAthematician-doctor</h4>
            <h3>Rs 300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant78" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC78" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img style="width:90%;height:60%;" src = "../assets/Home and Decor/Enamel pins/Pink Man - Enamel Pins.PNG" class="center1">
            <h2>AVAILABLE</h2>
            <h4>Pink Man</h4>
            <h3>Rs 300.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant79" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">   
            
            <input type="submit" value="Add to cart" name= "addC79" class="btn solid"/></div>
            </form>
        </div>

        <!-- <div class="item1">
            <img src = "../assets/bp(c8).jfif" class="center1">
            <h2>AVAILABLE</h2>
            <h4>BLACKPINK 'We Were Born To Be Alone' Logo Shirt</h4>
            <h3>Rs 950.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant80" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC80" class="btn solid"/></div>
            </form>
        </div>

        <div class="item1">
            <img  style="width:90%;height:60%;"src = "../assets/bp(c9).jfif" class="center1">
            <h2>AVAILABLE</h2>
            <h4>BLACKPINK Pink Logo In Hangul Shirt </h4>
            <h3>Rs 850.00</h3>
            <form action="#" class="#" method="GET">
                <div class="quantity">
            <input type="number" id="quantity_60e94fb32487e" name="quant81" class="input-text qty text" step="1" min="1" max="5"  value="1" title="Qty" size="4" placeholder="" inputmode="numeric">  
            
            <input type="submit" value="Add to cart" name= "addC81" class="btn solid"/></div>
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