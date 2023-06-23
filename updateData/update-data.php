<?php
   include"update-record.php";
?>
<?php

$con = mysqli_connect("localhost", "root", "", "store");
if (!$con == "") {
    echo "";
}

if (isset($_POST["submit"])) {
    $productname = $_POST["product"];
    $productnumber = $_POST["product-number"];
    $price = $_POST["price"];
    $dat = $_POST["dat"];
    $updateproduct = "UPDATE products  SET productNAM='$productname', productPRIC='$price' WHERE productNUM = '$productnumber'"; 
    $query = mysqli_query($con, $updateproduct);
     if(!$query==""){
        echo"Update successful";
     }
 }  
?>