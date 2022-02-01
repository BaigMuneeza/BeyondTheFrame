<?php
// database connection code 
include("connection.php");

session_start();

$DeliveryCharges = 250;
$CartItems = [];
$TotalAmount = 0;
// $ProductTotal = $DeliveryCharges + $TotalAmount;
$ProductTotal = 0;
$PaymentType = "";
$BillingId = "Test";
$DeliveryTypeEmpty = false;
$EmptyCart = false;
$DeleteError = false;
 
// $TotalAmount = 500;

$CartID=$_SESSION["CartID"];  
$CustomerName = $_SESSION["CustomerName"];  

$sql1= "Select ProductID From cartquantity Where CartID = '$CartID' "; 
$result1=mysqli_query($conn,$sql1);  
while($row = mysqli_fetch_array($result1))
{  
    if(!empty($row))
    {
        if(!empty($row['ProductID']))
        {
            $ProductID = $row['ProductID'];  

            $GetProductSQL= "Select * From productdetails Where productID = '$ProductID' "; 

            $GetProductResult=mysqli_query($conn,$GetProductSQL);

            while($row = mysqli_fetch_array($GetProductResult)) 
            { 
                array_push($CartItems , $row); 
            }  
        } 
    }  
} 

if(count($CartItems)>0)
{
    for ($i = 0; $i < count($CartItems); $i++)
    { 
        $productIDValue = $CartItems[$i]['productID'];
        $sql1 = "Select Quantity From cartquantity Where CartID = '$CartID' AND ProductID = '$productIDValue'"; 
        $GetProductQuantity=mysqli_query($conn,$sql1); 
        while($row = mysqli_fetch_array($GetProductQuantity)) 
        { 
            $Quantity = $row['Quantity'];
        }   
        $CartItems[$i]['Quantity'] = $Quantity;
    } 
}
else
{ 
    $EmptyCart = true;
}
 

$sql1= "Select Total From cartquantity Where CartID = '$CartID' "; 
$result1=mysqli_query($conn,$sql1);  
while($row = mysqli_fetch_array($result1))
{  
    if(!empty($row))
    {
        if(!empty($row['Total']))
        {
            $TotalAmount = $TotalAmount + $row['Total'];  
        } 
    }  
} 

$ProductTotal = $DeliveryCharges + $TotalAmount; 

if(isset($_POST['deletefromcartbtn']))
{	  
    if(empty($_POST['ItemToDelete']))
    { 
        $DeleteError = true;
        echo($_POST['ItemToDelete']); 
    }
    else
    {
        $DeleteError = false; 
        $ItemToDeleteId = $_POST['ItemToDelete'];
        
        $sql = "DELETE FROM cartquantity WHERE ProductID='$ItemToDeleteId'";

        if ($conn->query($sql) === TRUE) 
        {             
            header('location:Billing.php');//reload
        } 
        else 
        {
            echo "Error deleting record: " . $conn->error;
        }  
    }
}
if(isset($_POST['GotoHome']))
{
    header("Location: Home.php");
} 

if(isset($_POST['finishbtn']))
{	 
    if(empty($_POST['BillingType'])){ 
        $DeliveryTypeEmpty = true; // To Print that Delivery Type Selection is mandatory
    }else{
        $DeliveryTypeEmpty = false; 
        $PaymentType= $_POST['BillingType']; 

        $c_id=$_SESSION["UserID"]; //CustomerId

        $sql = "INSERT INTO Billing (PaymentType, DeliveryCharges, TotalAmount, ProductTotal,CustomerID)
        VALUES ('$PaymentType', '$DeliveryCharges', '$TotalAmount','$ProductTotal','$c_id')";

        if ($conn->query($sql) === TRUE) 
        { 
            $BillingId = $conn->insert_id;
            $conn->close();
            // echo "Data saved in Table Billing";
            header("Location: ConfirmationPage.php?BillingId=".$BillingId);
            exit();
        }
        else 
        {
            echo "Error Data saving in table Billing: " . $conn->error;
        }
        $_POST['BillingType'] = "";
        $PaymentType = "";
    } 
    
}  
// unset($_POST['finishbtn']);
$conn->close();
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

<body style="background-image: url('../assets/StyleAssets/Index_bg.jpg');background-size: 1400px 1100px;">
    <div class='container backgroundimageclass'>
        <div class='window'>
            <div class='order-info' style="padding-right: unset;">
                <div class='order-info-content' style=" Overflow-y: scroll; width: 1000px;">
                    <h2 style="font-weight: bold;">CART DETAILS</h2>
                    <div class='line'></div>
                    <?php
                        echo "<center>"; 
                        echo "<div style='color: red;'>"; 
                        if ($DeleteError) 
                        {
                            echo "Error while deleting the record.";
                        } 
                        echo "</div>";
                                    
                        echo "</center>"; 
                    ?>
                    <table class='order-table'>
                        <tbody>
                            <?php
                                if($EmptyCart)
                                {?>
                                    <tr>
                                        <td style="color: red;">
                                            No Items in Cart.
                                        </td> 
                                    </tr>
                                <?php
                                }
                                for ($i = 0; $i < count($CartItems); $i++)
                                { 
                                    echo '<tr >';
                                    echo '<form action="Billing.php" method="post">';   
                                    // echo '<td>'; 
                                    // echo '<img class="full-width" src="data:image/jpeg;base64,'.base64_encode( stripslashes($CartItems[$i]['ProductImage']) ).'"/>';
                                     
                                    // // echo '<img src="data:image/jpeg;base64,'.base64_encode( stripslashes($CartItems[$i]['ProductImage']) )'" class='full-width'></img>";
                                    // echo '</td>';   
                                    echo '<td>';   
                                    echo "<br> <span class='thin'>{$CartItems[$i]["productName"]}</span>";  
                                    echo "<br>{$CartItems[$i]["ProductDetail"]}";      
                                    echo "<br> <span class='price'>Rs. {$CartItems[$i]["ProductPrice"]}/-<br><br></span>";    
                                    echo "<br>Quantity: {$CartItems[$i]["Quantity"]}";       
                                    echo "<br>";       
                                    echo '<input type="submit" name="deletefromcartbtn" value="Delete" class="btn solid"  />';  
                                    echo "<input name='ItemToDelete' id='ItemToDelete' value='{$CartItems[$i]["productID"]}' style='visibility:hidden;'/>";   
                                    
                                    echo '</form>';  
                                    echo'<div class="line"></div>';  
                                    echo '</td>';
                                    echo '</tr>';
                                } 
                            ?> 
                        </tbody> 
                    </table>   
                </div>
            </div>
            <div class='credit-info'>
                <form method="POST" action="Billing.php" style="width: 100%;padding-top: 10px;">                    
                    <button  class='pay-btn'  style='width: 100%; position: unset!important;' name='GotoHome'> Go To Home</button>

                    <div class='credit-info-content'> 

                        <div>
                            
                            <table>
                                <tr>
                                    <td style="font-size: 32px; font-weight: bold;">User Name</td>
                                    <td style="font-size: 32px; font-weight: bold; padding-left: 69px;"><?php echo($CustomerName) ?></td>
                                </tr>

                            </table>
                        </div>

                            <table class='half-input-table'>
                                <tr>
                                    <td style="width: unset; color: white;">Select your payment type:</td>
                                    <td>
                                        <div class='dropdown' id='card-dropdown'> 

                                            <select class='dropdown-btn'name="BillingType" id="BillingType">
                                                <option class="BillingTypeOptions" value="" selected>Please Select</option>
                                                <option class="BillingTypeOptions" value="Cash on Delivery">Cash on Delivery</option>
                                                <option class="BillingTypeOptions" value="Bank Transfer">Bank Transfer</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <div class='totalbill'>
                                    <span style='float:left;'> 
                                <div class='thin dense'>Delivery</div>
                                TOTAL
                            </span>
                                    <span style='float:right; text-align:right;'> 
                                    <div class='thin dense'><?php echo($DeliveryCharges)?>/- RS</div>
                                    <?php echo($ProductTotal)?>/- RS
    
                            </span>
                                </div>
                            </table>
                            <div style="float: right; color: red;">
                            <?php 
                                if ($DeliveryTypeEmpty) {
                                echo "Please Select Delivery Type";
                                }
                            ?>
                            </div>
                            <?php
                            
                                if(count($CartItems)==0)
                                {
                                    echo "<button class='pay-btn' type='submit' name='finishbtn' style='cursor:not-allowed;' disabled>Finish Shopping !</button>";
                                }
                                else
                                {                               
                                    echo "<button class='pay-btn' type='submit' name='finishbtn' >Finish Shopping !</button>";
                                } 
                            ?>
                            

                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="../js/billing.js"></script>
</body>

</html>