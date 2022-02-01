<?php

$servername="localhost";
$username="root";
$password="dbms";
$dbname="beyond the frame";



// $servername = "localhost";
// $username = "root";
// $password = "EnterYourPasswordHere";/* Put your password */
// $dbname = "beyond the frame";/* Put your database name */


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    // echo "*";
    // $sql = "INSERT INTO customerdetails (CustomerName,CustomerPassword,CustomerEmail,CustomerAddress,CustomerPhoneNo)
    // VALUES ('Rosanne Park','Hank','rose@gmail.com','3781 Chaeyong Avenue,Sydney','67354626718')";
    // if (mysqli_query($conn, $sql)) {
    //     echo "New record created successfully";
    // } 
    // else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
}
else{
    echo "connection failed ";
}

?>    