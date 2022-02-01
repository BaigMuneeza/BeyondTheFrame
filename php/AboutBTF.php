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

</head>
<body>

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






    <main>

<!--             
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
                </div>  -->

        
                <div style="width:100%; height: 100%;background-color:rgb(255, 209, 220);margin-top:1em;margin-bottom: 1em;">
                <div id="solo"style="width:90%; height: 100%; background-color:rgb(253, 253, 253); margin: auto; margin-top: 0.5em; ">

               
                   

                <div class="row">
                <div class="column left "style="width:50%;height: 100%;margin-left: 2em; margin-top: 2em;"><img src="../assets/StyleAssets/decorland.jpg" style='height: 100%; width: 100%; object-fit: contain' ></div>
                <div class="column right" style="width:40%;height: 40%;margin-left: 2em; margin-top: 4em;"><p>BeyondTheFrame provides quality designer stationery at very affordable prices at your door step. We have a complete range of Fancy Funky to Conventional Daily to use stationery including  organizers,  pencil cases,  DIY and crafting projects covering  art materials, supplies, School Supplies, Craft Supplies.<br><br>Our sole purpose is to create an artistic flare about everything mundane and while doing so make art easy and accessible for all.We feel pride in our quality checks and measures, Only the best quality products are displayed on our website  and the same quality products as shown are delivered to our customers.Our motto is art, pink & pretty little things!</p></div>
                </div> 

                <!-- <div style="width:95%;height: 95%; margin-right:1em; margin-left:2em;"><h4> Our sole purpose is to create an artistic flare about everything mundane and while doing so make art easy and accessible for all.We feel pride in our quality checks and measures, Only the best quality products are displayed on our website  and the same quality products as shown are delivered to our customers.Our motto is art, pink & pretty little things!</h4></div> -->
            </div>






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
