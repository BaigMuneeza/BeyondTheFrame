<?php
session_start();
    $BillingId = "Test";
    $UserName = $_SESSION["CustomerName"];
    
    if($_GET)
    { 
        $BillingId = $_GET['BillingId'];
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../css/stylebilling.css" />
</head>
<script src="../js/jquery-1.11.3.min.js"></script>

<body style="background-color:rgb(255, 209, 220)">
    <div class='containerConfirmation backgroundimageclass'>
        <div class='windowConfirmation'> 
            <div class='credit-info' style="width: 100%;padding-left: 300px;border-radius: 30px;">
                <div class='credit-info-content'> 
                    <div style="font-size: 32px; font-weight: bold; padding-left: 50px;">
                        User Name: <?php echo($UserName)?> 
                    </div>
                    <div style="padding-left: 50px;">
                        Your Order Number is <?php echo($BillingId)?>
                    </div>
                    <button class='pay-btn' name="confirmationbtn" style="width: 50%;" onClick="document.location.href='Home.php'" >Continue Shopping With US!!!</button>
                    

                </div>

            </div>
        </div>
    </div> 
</body>

</html>