<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Accessories</title>
    <link rel="stylesheet" href="../css/stylemainproductpg.css" />
     <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/b010d9c86d.js" crossorigin="anonymous"></script>

    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../css/stylehome_page.css" />  
    <!-- <style>
    
     .container{
        display: grid;
        margin: 4%;
        text-align: center;
        grid-template-columns: repeat(3, auto);
        grid-gap: 4rem;
    }
    .item{
        box-shadow: 2px 2px 20px black;
        display: inline-block;
        border-radius: 5px; 
        margin: 2%;
    
    }
    .image img{
        width: 100%;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
  
}
    button{
             
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: white;
        border: 1px solid black;
        border-radius: 5px;
        padding:10px;
              }
    button:hover{
        background-color: black;
        color: white;
        transition: .5s;
        cursor: pointer;
                  }
  
    
      
    </style> -->
</head>
<body>
<!-- <header >
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
                            <a href="TechAccessories.php" class="dropdown-item" style="background-color:#4B0082; color:white; font-size: 1em;width: 200px; font-weight: bold;">HARRY POTTER</a>
                            <a href="HomeDecor.php" class="dropdown-item" style="background-color:#4B0082; color:white; font-size: 1em;width: 200px; font-weight: bold;">BLACK PINK</a>
                            <a href="Books.php" class="dropdown-item" style="background-color:#4B0082; color:white; font-size: 1em;width: 200px; font-weight: bold;">BEYOND THE SCENE</a>
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
    <!-- <div class="container1">
        <div class="item1">
            <img src = "../assets/StyleAssets/MC_Link.jpg" class="centre">
            <h3>Mobile Phone Covers</h3>
            <a href="(TA)MobileCovers.php"><button type="submit">VISIT</button></a>
        </div>
        <div class="item1">
            <img src ="../assets/StyleAssets/LSk_Link.jpg" class="centre">
            <h3>Laptop Skins</h3>
            <a href="(TA)LaptopSkins.php"><button type="submit">VISIT</button></a>
        </div>  
        <div class="item1">
            <img src = "../assets/StyleAssets/LS_link.jpg" class="centre">
            <h3>Laptop stickers</h3>
            <a href="(TA)LaptopStickers.php"><button type="submit">VISIT</button></a>
        </div>            
        
       
        
        
    </div> -->

    <main>

            
               <div style="width:100%; height: 100%;background-color:rgb(255, 209, 220);margin-bottom:0.2em;"> 
               
               <div id="solo"style="width:55%; height: 80%;background-color:#FFC0CB; margin: auto; margin-top: 
                0.2em;background-image:url('../assets/StyleAssets/MC_Link3.jpg');">
                <div class="row">
                    <div class="column middle" style="width:45%; height: 60%;background: rgb(0, 0, 0);background: rgba(255,209,220,0.7);color: #f1f1f1; margin-bottom: 2em;margin-top: 2em; margin-left: 4em; margin-right: 4em;"><a href="(TA)MobileCovers.php" style="text-decoration:transparent;font-family:Arial;"><h1 style="color:#701a2e;  font-size: 3em;margin-left:0.5em;margin-top:1em;margin-bottom:1em;"><b> Phone Cases </b><br></h1></a></div>
                  </div>
                </div> 


                               
               <div id="solo"style="width:55%; height: 80%;background-color:#FFC0CB; margin: auto; margin-top: 
               2em;background-image: url('../assets/StyleAssets/LSk_Link.jpg');">
               <div class="row">
                   <div class="column middle" style="width:45%; height: 60%;background: rgb(0, 0, 0);background: rgba(255,209,220,0.7);color: #f1f1f1;margin-bottom: 2em;margin-top: 6em; margin-left: 22em; margin-right: 5em;"><a href="(TA)LaptopSkins.php" style="text-decoration:transparent;font-family:Arial;"><h1 style="color:#701a2e;  font-size: 3em;margin-left:0.5em;margin-top:1em;margin-bottom:1em;"><b>Laptop Skins</b><br></h1></a></div>
                 </div>
               </div> 

               <div id="solo"style="width:55%; height: 80%;;object-fit:scale-down;background-color:#FFC0CB; margin: auto; margin-top: 
                2em;background-image: url('../assets/StyleAssets/LS_link.jpg');">
                <div class="row">
                    <div class="column middle" style="width:45%; height: 60%;background: rgb(0, 0, 0);background: rgba(255,209,220,0.7);color: #f1f1f1;margin-bottom:0.2em;margin-top: 5.5em; margin-left: 4em; margin-right: 4em;"><a href="(TA)LaptopStickers.php" style="text-decoration:transparent;font-family:Arial;"><h1 style="color:#701a2e;  font-size: 3.7em;margin-left:0.5em;margin-top:1em;margin-bottom:1em;"><b>Stickers</b><br></h1></a></div>
                  </div>
                </div> 


                <!-- <div id="solo"style="width:55%; height: 80%; background-color:#FFC0CB; margin: auto; margin-top: 
                2em; "><h1><font size="10">PHABOOOOOOOOOOOOO</font></h1>
                <div class="row">
                    <div class="column left" style="background-color:rgb(15, 6, 54);margin-bottom: 2em; margin-top: 2em;margin-right:3 em;margin-left: 2em;"><a href="harrypotter.php"><img src="jkt.jpg" width="250" height="250"></a></div>
                    <div class="column middle" style="background-color:#bbb;margin-bottom: 2em;margin-top: 2em; margin-left: 4em; margin-right: 4em;"><a href="harrypotter.php"><img src="jkt.jpg"width="250" height="250"></a></div>
                  </div>
                </div>  -->


            
           
            <!-- </div> -->

        








    </main>



    <footer id="footer" class="footer" style=" background-color: #7c3042;box-shadow: 15px 15px 15px 15px black;">
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
