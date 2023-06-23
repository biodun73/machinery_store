<?php

$con = mysqli_connect("localhost", "root", "", "store");
if (!$con == "") {
    echo "";
}
$imag = "../image/" . $_FILES["image"]["name"];
$productname = $_POST["product"];
$productnumber = $_POST["product-number"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$dat = $_POST["dat"];

if (isset($_POST["submit"])) {
    if ($_FILES['image']['type'] != '.jpg') { //create the type of file to upload//
        if (is_uploaded_file($_FILES['image']['tmp_name'])) { //check the temporary file in the folder//
            if ($_FILES['image']['error'] > 1000000) { //check error//
                echo 'Error,file cannot be uploaded';
            } else {
                move_uploaded_file($_FILES['image']['tmp_name'],  $imag); //upload the file into the folder//
                // echo"<div id='suc'>";
                echo 'Photo has been successfully uploaded';
                //echo"</div>";
                $insertproduct = "INSERT INTO products(name,productCode,price,quantity,imag,dat) 
                VALUES('$productname ','$productnumber','$price','$quantity','$imag','$dat')";
                $query = mysqli_query($con, $insertproduct);
                if ($query) {
                    header("Location:../insertData/record-data.php");
                }
            }
        }
    }
}
