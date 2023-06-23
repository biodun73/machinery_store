<?php
   include"../deleteData/delete-data.php";
?>
<?php

$con = mysqli_connect("localhost", "root", "", "store");
if (!$con == "") {
    echo "";
}

if (isset($_POST["submit"])) {
    $productnumber = $_POST["product-number"];
    $deleteproduct = "DELETE FROM products WHERE productCode = '$productnumber'"; 
     $query=mysqli_query($con, $deleteproduct);
     if(!$query==""){
        echo"Delete successful";
     }
 }  
?>