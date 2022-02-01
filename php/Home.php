<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeyondTheFrame_Home</title>
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

    <!-- Main Section-->

    <main>
        <!-- First Slider-->

        <div style="margin-bottom: 20em;"class="container-fluid p-0">
            <div style="width:100%; height: 200px;margin-top:1em;color:rgb(255, 209, 220);"class="site-slider">
                <div class="slider-one">
                    <div>
                        <img src="../assets/StyleAssets/pincarosel (2).jpg" class="img-fluid sliderlayout" alt="Banner 4"> 
    
                    </div>
                    <div>
                        <img src="../assets/StyleAssets/journalid2.jpg" class="img-fluid sliderlayout" alt="Banner 5">
                    </div>
                    <div>
                        <img src="../assets/StyleAssets/journal_carosel.jpg" class="img-fluid sliderlayout" alt="Banner 6">
                    </div>
                </div>
                <div class="slider-btn">
                     <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
                     <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
        </div>

        <div style="width:100%; height: 100%;background-color:rgb(255, 209, 220);margin-top:1em;margin-bottom: 1em;">
                <div id="solo"style="width:90%; height: 100%; background-color:rgb(253, 253, 253); margin: auto; margin-top: 
                0.5em; ">
                   
                <div class="row">
    
                    <div class="column left" style="background-color:rgb(255, 255, 255);margin-bottom: 2em; margin-top: 2em;margin-right:3 em;margin-left: 2em;"><a href="BookSupplies.php">
                        <img src="../assets/StyleAssets/jornalid.jpg" width="350" height="350"></a></div>
                    <div class="column middle" style="background-color:#bbb;margin-bottom: 2em;margin-top: 2em; margin-left: 4em; margin-right: 4em;"><a href="HomeDecor.php"><img src="../assets/StyleAssets/decorid.jpg"width="350" height="350"></a></div>
                    <div class="column right" style="background-color:#ccc;margin-bottom: 2em;margin-top: 2em;"><a href="TechAccessories.php"><img src="../assets/StyleAssets/phonecaseid.jpg"width="350" height="350"></a></div>
    
                  </div>
                </div> 
           
            </div>

            <div style="width:100%;height: 100%;"><h1><a href="AboutBTF.php"><img src="../assets/StyleAssets/decorland.jpg" style='height: 100%; width: 100%; object-fit: contain' ></a></div>

<!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "61f64162f4eb3b0007190b47";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->

  
    </main>
<!-- /Main Section-->


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
