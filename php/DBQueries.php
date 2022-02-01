 <!-- <?php
include("connection.php"); 

//CS19061//

                                                /* Table Creation Queries */  

// 1.CustomerCart 

// $sql = "CREATE TABLE customercart
// ( 
// CartID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// CustomerID INT(6) 
// )"; 

// if ($conn->query($sql) === TRUE) {
//     echo "Table CustomerCart created successfully";
// }
//  else {
//     echo "Error creating table CustomerCart: " . $conn->error;
// }

// 2.Billing  

// $sql = "CREATE TABLE Billing
// (
// BillingID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// -- CartID INT(6) UNSIGNED AUTO_INCREMENT ,
// PaymentType varchar(50),
// TotalAmount INT(100),
// ProductTotal INT(100),
// DeliveryCharges INT(100)
// )"; 

// if ($conn->query($sql) === TRUE) {
//     echo "Table Billing created successfully";
// }
//  else {
//     echo "Error creating table Billing: " . $conn->error;
// } 
// 3- Poduct Details/////////////////////////////////
// $sql = "CREATE TABLE productdetails
// (
// productID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// productName varchar(50),
// ProductPrice INT(100),
// Stock INT(100),
// ProductDetail varchar(100),
// ProductImage  longblob NOT NULL
// )"; 

// if (TRUE) {
//     echo "Table productdetails created successfully";
//     $Stock =500;
//     $opaque = "Opaque";
//     $multicolor = "Multicolor";
//     $transparent = "Transparent";
//     $Solidblack = "Solid Black";
//     $Solidbrown = "Solid Brown";
//     $Readytowear = "Pret Wear";
//     $stuffwarm = "Woolen warm";
//     $Stuffcool = "Summer perfect";
//     $Metal = "Hard, Metal";
 
//                             // Queries of Insertion

//                             // FANDOM ==***HARRY POTTER***

//                             // Harry Potter Stickers//
//                             //   1
                        
//     $inserthpstickers1 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('HARRY POTTER 9 3/4 Sticker', '$Stock','$opaque',10 )";
    
//     if ($conn->query($inserthpstickers1) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                // 2
//     $inserthpstickers2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('HARRY POTTER SET OF STICKERS', '$Stock','$multicolor',100 )";
//     if ($conn->query($inserthpstickers2) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 3
//     $inserthpstickers3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('HARRY POTTER Set Of Sticker', '$Stock','$transparent',250 )";
//     if ($conn->query($inserthpstickers3) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 4
//     $inserthpstickers4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('HARRY POTTER ITS LEVIOSA NOT LEVIOSA Sticker', '$Stock','$Solidblack',20 )";
//     if ($conn->query($inserthpstickers4) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 5
//     $inserthpstickers5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('HARRY POTTER Broom Sticker', '$Stock','$Solidbrown',10 )";
//     if ($conn->query($inserthpstickers5) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }   
//                                 // 6
//     $inserthpstickers6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('HARRY POTTER GRYFFINDOR Sticker', '$Stock','$opaque',20 )";
//     if ($conn->query($inserthpstickers6) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     } 
//                                 // 7
//     $inserthpstickers7 = "INSERT INTO productdetails (productName, Stock, ProductDetail,ProductPrice )
//     VALUES ('HARRY POTTER QUIDDITCH Sticker', '$Stock','$opaque',10 )";
//     if ($conn->query($inserthpstickers7) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     } 

//                                 // 8
//     $inserthpstickers8 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('HARRY POTTER Sticker', '$Stock','$opaque',10 )";
//     if ($conn->query($inserthpstickers8) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     } 

//                                 // 9
//     $inserthpstickers9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('HARRY POTTER SEVERUS SNAP Sticker', '$Stock','$transparent',10 )";
//     if ($conn->query($inserthpstickers9) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     } 


                            // Harry Potter Accessories//
                              // 1
    // $inserthpAccessories1 = "INSERT INTO productdetails (productName, Stock, ProductDetail,ProductPrice )
    // VALUES ('HARRY POTTER Marauders Map', '$Stock','$Solidbrown',800 )";
    // if ($conn->query($inserthpAccessories1) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                            // 2
    // $inserthpAccessories2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER Jewellery Accessory', '$Stock','$multicolor',1000)";
    // if ($conn->query($inserthpAccessories2) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 3
    // $inserthpAccessoriess3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY GLASSES Logo ring', '$Stock','$Solidbrown',300 )";
    // if ($conn->query($inserthpAccessoriess3) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 4
    // $inserthpAccessories4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER Wand Tie And Glasses', '$Stock','$Solidblack',3500 )";
    // if ($conn->query($inserthpAccessories4) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 5
    // $inserthpAccessories5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER book set', '$Stock','$Solidbrown',9999 )";
    // if ($conn->query($inserthpAccessories5) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
      
    //                             // 6
    // $inserthpAccessories6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER Broom Compase', '$Stock','$Solidbrown',500 )";
    // if ($conn->query($inserthpAccessories6) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 7
    // $inserthpAccessories7 = "INSERT INTO productdetails (productName, Stock, ProductDetail,ProductPrice )
    // VALUES ('HARRY POTTER Replica Jewellery', '$Stock','$transparent',1300 )";
    // if ($conn->query($inserthpAccessories7) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 8
    // $inserthpAccessories8 = "INSERT INTO productdetails (productName, Stock, ProductDetail,ProductPrice )
    // VALUES ('HARRY POTTER PEN', '$Stock','$Solidblack',250 )";
    // if ($conn->query($inserthpAccessories8) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 9
    // $inserthpAccessories9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER NECLACE', '$Stock','$Solidbrown',1000)";
    // if ($conn->query($inserthpAccessories9) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }


                        // Harry Potter Clothes//
                              // 1
    // $inserthpClothes1 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER Black Shirt', '$Stock','$Solidblack',950 )";
    // if ($conn->query($inserthpClothes1) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                            // 2
    // $inserthpClothes2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER Shirt And Trouser Set', '$Stock','$multicolor',2500)";
    // if ($conn->query($inserthpClothes2) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 3
    // $inserthpClothes3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER Gown', '$Stock','$Solidbrown',1250 )";
    // if ($conn->query($inserthpClothes3) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 4
    // $inserthpClothes4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER cropped SweatShirt', '$Stock','$Readytowear',1100 )";
    // if ($conn->query($inserthpClothes4) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 5
    // $inserthpClothes5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER KIDS SHIRT', '$Stock','$Readytowear',600 )";
    // if ($conn->query($inserthpClothes5) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 6
    // $inserthpClothes6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER JACKET FOR KIDS', '$Stock','$stuffwarm',950 )";
    // if ($conn->query($inserthpClothes6) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 7
    // $inserthpClothes7 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRRY POTTER SCARF HAT AND GLOVES', '$Stock','$stuffwarm',2550 )";
    // if ($conn->query($inserthpClothes7) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
       
    //                             // 8
    // $inserthpClothes8 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER WHITE TEE SHIRT', '$Stock','$Stuffcool',550 )";
    // if ($conn->query($inserthpClothes8) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 9
    // $inserthpClothes9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('HARRY POTTER SHIRT FOR KIDS', '$Stock','$Stuffcool',450)";
    // if ($conn->query($inserthpClothes9) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
        
    //                         // FANDOM ==***BTS***
    //                             // BTS Stickers//
    //                           // 1
    // $insertBTSstickers1 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS DYNAMITE Group Photo Stickers', '$Stock','$transparent',15 )";
    // if ($conn->query($insertBTSstickers1) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                            // 2
    // $insertBTSstickers2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS Anime Sticker', '$Stock','$opaque',10 )";
    // if ($conn->query($insertBTSstickers2) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 3
    // $insertBTSstickers3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS JIN sticker', '$Stock','$transparent',15 )";
    // if ($conn->query($insertBTSstickers3) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 4
    // $insertBTSstickers4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS BUTTER ARMY Sticker', '$Stock','$transparent',20 )";
    // if ($conn->query($insertBTSstickers4) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 5
    // $insertBTSstickers5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS DYNAMITE Sticker', '$Stock','$transparent',10 )";
    // if ($conn->query($insertBTSstickers5) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 6
    // $insertBTSstickers6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS Finger Heart Logo Sticker', '$Stock','$opaque',15 )";
    // if ($conn->query($insertBTSstickers6) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 7
    // $insertBTSstickers7 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS Anime Sticker', '$Stock','$opaque',10 )";
    // if ($conn->query($insertBTSstickers7) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 8
    // $insertBTSstickers8 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS Sticker', '$Stock','$transparent',10 )";
    // if ($conn->query($insertBTSstickers8) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 9
    // $insertBTSstickers9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS LOVE YOURSELF Sticker', '$Stock','$transparent',15 )";
    // if ($conn->query($insertBTSstickers9) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

                                //BTS Accessories//
    //                           // 1
    // $insertBTSAccessories1 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS 7 Neclace', '$Stock','$Solidbrown',1200 )";
    // if ($conn->query($insertBTSAccessories1) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                            // 2
    // $insertBTSAccessories2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS HOUSE OF BTS badge', '$Stock','$multicolor',150)";
    // if ($conn->query($insertBTSAccessories2) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                             // 3
    // $insertBTSAccessories3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS All Members Signature Cushion', '$Stock','$Solidblack',850 )";
    // if ($conn->query($insertBTSAccessories3) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                             // 4
    // $insertBTSAccessories4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS WE ARE BULLETPROOF Logo Shirt', '$Stock','$Solidblack',850 )";
    // if ($conn->query($insertBTSAccessories4) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                             // 5
    // $insertBTSAccessories5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS EUPHORIA FANART Phone Cover', '$Stock','$multicolor',1000 )";
    // if ($conn->query($insertBTSAccessories5) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                             // 6
    // $insertBTSAccessories6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS BUTTER Group Photo NoteBook', '$Stock','$multicolor',750 )";
    // if ($conn->query($insertBTSAccessories6) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                             // 7
    // $insertBTSAccessories7 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS BE Water Bottle', '$Stock','$Metal',1000 )";
    // if ($conn->query($insertBTSAccessories7) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                             // 8
    // $insertBTSAccessories8 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS ARMY Logo Magnet Watch', '$Stock','$Metal',1500 )";
    // if ($conn->query($insertBTSAccessories8) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                             // 9
    // $insertBTSAccessories9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS SIMPLE ARMY SILVER PLATED Neclace', '$Stock','$Metal',1400)";
    // if ($conn->query($insertBTSAccessories9) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }


                            // BTS Clothes//
    //                           // 1
    // $insertBTSClothes1 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS EUPHORIA Logo Shirt', '$Stock','$Solidblack',1000 )";
    // if ($conn->query($insertBTSClothes1) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                            // 2
    // $insertBTSClothes2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS DYNAMITE Logo Shirt', '$Stock','$Stuffcool',1050)";
    // if ($conn->query($insertBTSClothes2) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

    //                             // 3
    // $insertBTSClothes3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS BANGTAN Logo Shirt', '$Stock','$Solidblack',950 )";
    // if ($conn->query($insertBTSClothes3) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 4
    // $insertBTSClothes4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS Finger Heart Shirt', '$Stock','$Solidblack',1000 )";
    // if ($conn->query($insertBTSClothes4) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 5
    // $insertBTSClothes5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS BUTTER Concept Group Shirt', '$Stock','$multicolor',1100 )";
    // if ($conn->query($insertBTSClothes5) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }   

    //                             // 6
    // $insertBTSClothes6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS BUTTER Logo Shirt', '$Stock','$Stuffcool',1100 )";
    // if ($conn->query($insertBTSClothes6) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 7
    // $insertBTSClothes7 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS LOVE YOURSELF TEAR Logo Shirt', '$Stock','$Stuffcool',1050 )";
    // if ($conn->query($insertBTSClothes7) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 8
    // $insertBTSClothes8 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS ARMY Flower Print Logo Shirt', '$Stock','$Stuffcool',1000 )";
    // if ($conn->query($insertBTSClothes8) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 9
    // $insertBTSClothes9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BTS JUNGKOOK Fire Logo Shirt', '$Stock','$Solidblack',1200)";
    // if ($conn->query($insertBTSClothes9) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }


                            // FANDOM ==***BLACK PINK***

                                    // BLACK PINK Stickers//
//                               // 1
//     $insertbpstickers1 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINk Sticker', '$Stock','$opaque',10 )";
//     if ($conn->query($insertbpstickers1) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                // 2
//     $insertbpstickers2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Sticker', '$Stock','$opaque',15 )";
//    if ($conn->query($insertbpstickers2) === TRUE) 
//    {        
//        echo "Data saved in Table productdetails";
//    }
//    else 
//    {
//        echo "Error Data saving in table productdetails: " . $conn->error;
//    }
//                                 // 3
//     $insertbpstickers3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK THE ALBUM Album Sticker', '$Stock','$Solidblack',15 )";
//    if ($conn->query($insertbpstickers3) === TRUE) 
//    {        
//        echo "Data saved in Table productdetails";
//    }
//    else 
//    {
//        echo "Error Data saving in table productdetails: " . $conn->error;
//    }
//                                 // 4
//     $insertbpstickers4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Sticker', '$Stock','$Solidblack',10 )";
//    if ($conn->query($insertbpstickers4) === TRUE) 
//    {        
//        echo "Data saved in Table productdetails";
//    }
//    else 
//    {
//        echo "Error Data saving in table productdetails: " . $conn->error;
//    }
//                                 // 5
//     $insertbpstickers5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK BLACK PINK IN YOUR AREA Sticker', '$Stock','$multicolor',20 )";
//    if ($conn->query($insertbpstickers5) === TRUE) 
//    {        
//        echo "Data saved in Table productdetails";
//    }
//    else 
//    {
//        echo "Error Data saving in table productdetails: " . $conn->error;
//    }
//                                 // 6
//     $insertbpstickers6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK BLINK Logo Sticker', '$Stock','$Solidblack',15 )";
//    if ($conn->query($insertbpstickers6) === TRUE) 
//    {        
//        echo "Data saved in Table productdetails";
//    }
//    else 
//    {
//        echo "Error Data saving in table productdetails: " . $conn->error;
//    }
//                                 // 7
//     $insertbpstickers7 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Logo Sticker', '$Stock','$Solidblack',13 )";
//    if ($conn->query($insertbpstickers7) === TRUE) 
//    {        
//        echo "Data saved in Table productdetails";
//    }
//    else 
//    {
//        echo "Error Data saving in table productdetails: " . $conn->error;
//    }
//                                 // 8
//     $insertbpstickers8 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Set Of 4 Stickers', '$Stock','$opaque',50 )";
//    if ($conn->query($insertbpstickers8) === TRUE) 
//    {        
//        echo "Data saved in Table productdetails";
//    }
//    else 
//    {
//        echo "Error Data saving in table productdetails: " . $conn->error;
//    }
//                                 // 9
//     $insertbpstickers9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Pink Logo Sticker', '$Stock','$Solidblack',10 )";
//    if ($conn->query($insertbpstickers9) === TRUE) 
//    {        
//        echo "Data saved in Table productdetails";
//    }
//    else 
//    {
//        echo "Error Data saving in table productdetails: " . $conn->error;
//    }

                                //Black Pink Accessories//
    //                           // 1
    // $insertbpAccessories1 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINk Member Name Neclace', '$Stock','$Metal',1200 )";
    // if ($conn->query($insertbpAccessories1) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                            // 2
    // $insertbpAccessories2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINK Signature Universal Phone Cover', '$Stock','$multicolor',1000)";
    // if ($conn->query($insertbpAccessories2) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 3
    // $insertbpAccessories3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINK Magnet watch', '$Stock','$Metal',850 )";
    // if ($conn->query($insertbpAccessories3) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 4
    // $insertbpAccessories4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINK YIN AND YANG Cushion', '$Stock','$multicolor',850 )";
    // if ($conn->query($insertbpAccessories4) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 5
    // $insertbpAccessories5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINK Group Fanart Notebook', '$Stock','$multicolor',850 )";
    // if ($conn->query($insertbpAccessories5) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 6
    // $insertbpAccessories6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINK KILL THIS LOVE Logo Water Bottle', '$Stock','$Metal',1000 )";
    // if ($conn->query($insertbpAccessories6) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 7
    // $insertbpAccessories7 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINK Galaxy Logo Mug', '$Stock','$Solidblack',650 )";
    // if ($conn->query($insertbpAccessories7) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 8
    // $insertbpAccessories8 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINK THE ALBUM Album Art Pouch', '$Stock','$Solidblack',700 )";
    // if ($conn->query($insertbpAccessories8) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }
    //                             // 9
    // $insertbpAccessories9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
    // VALUES ('BLACKPINK DDU DU DDU DU MV Fanart Cushion', '$Stock','$multicolor',850)";
    // if ($conn->query($insertbpAccessories9) === TRUE) 
    // {        
    //     echo "Data saved in Table productdetails";
    // }
    // else 
    // {
    //     echo "Error Data saving in table productdetails: " . $conn->error;
    // }

                            // Black Pink Clothes//
                              // 1
//     $insertbpClothes1 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINk BP IN YOUR AREA logo SweatShirt', '$Stock','$Stuffcool',1000 )";
//     if ($conn->query($insertbpClothes1) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                // 2
//     $insertbpClothes2 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Performance Stage Fanart Cropped Tee', '$Stock','$Stuffcool',1150)";
//     if ($conn->query($insertbpClothes2) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 3
//     $insertbpClothes3 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Jennie Basic Logo Shirt', '$Stock','$Stuffcool',850 )";
//     if ($conn->query($insertbpClothes3) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 4
//     $insertbpClothes4 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Ddu Ddu Ddu Du Logo SweatShirt', '$Stock','$stuffwarm',1200 )";
//     if ($conn->query($insertbpClothes4) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 5
//     $insertbpClothes5 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK How You Like That SweatShirt', '$Stock','$stuffwarm',1100 )";
//     if ($conn->query($insertbpClothes5) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 6
//     $insertbpClothes6 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK BLINK Logo Cropped Tee', '$Stock','$Stuffcool',1150 )";
//     if ($conn->query($insertbpClothes6) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 7
//     $insertbpClothes7 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Logo Hoodie', '$Stock','$stuffwarm',1350 )";
//     if ($conn->query($insertbpClothes7) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 8
//     $insertbpClothes8 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK We Were Born To Be Alone Logo Shirt', '$Stock','$Stuffcool',950 )";
//     if ($conn->query($insertbpClothes8) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }
//                                 // 9
//     $iinsertbpClothes9 = "INSERT INTO productdetails (productName, Stock, ProductDetail, ProductPrice )
//     VALUES ('BLACKPINK Pink Logo In Hangul Shirt', '$Stock','$Stuffcool',850)";
//     if ($conn->query($iinsertbpClothes9) === TRUE) 
//     {        
//         echo "Data saved in Table productdetails";
//     }
//     else 
//     {
//         echo "Error Data saving in table productdetails: " . $conn->error;
//     }

// if ($conn->query($sql) === TRUE) {
//     echo "Table productdetails created successfully";
// }

//  else {
//     echo "Error creating table productdetails: " . $conn->error;
// }




// 4-CartQuantity
// $sql = "CREATE TABLE CartQuantity
// (
// CartID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// ProductID INT(100),
// Quantity INT(100),
// Total INT(100)
// )"; 

// if ($conn->query($sql) === TRUE) {
//     echo "Table CartQuantity created successfully";
// }
//  else {
//     echo "Error creating table CartQuantity: " . $conn->error;
// } 

//CS19015//
                                               /* Table Creation Queries */  

// 1.Customerdetails 
// $sql = "CREATE TABLE customerdetails
// ( 
// CustomerID INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
// CustomerName VARCHAR(50) NOT NULL , 
// CustomerPassword VARCHAR(50) NOT NULL ,
// CustomerEmail VARCHAR(50) NOT NULL , 
// CustomerPhoneNo VARCHAR(50) NOT NULL , 
// CustomerAddress VARCHAR(50) NOT NULL 
// )";

// if ($conn->query($sql) === TRUE) {
//         echo "Table customerdetails created successfully";
//     }
//      else {
//         echo "Error creating table customerdetails: " . $conn->error;
//     } 
// // 2-customerloc
// $sql = "CREATE TABLE customerloc
// ( 
// CustomerID INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
// CustomerName VARCHAR(50) NOT NULL , 
// CustomerAddress VARCHAR(50) NOT NULL , 
// CustomerCountry VARCHAR(50) NOT NULL
// )";
// if ($conn->query($sql) === TRUE) {
//             echo "Table customerloc created successfully";
//         }
//          else {
//             echo "Error creating table customerloc: " . $conn->error;
// //         } 
// $conn->close();

// ?> -->