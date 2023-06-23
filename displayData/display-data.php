<?php
       //connection
       $con = mysqli_connect("localhost","root","","store");
       $sch = filter_input(INPUT_GET,'search');
       $select = "SELECT * FROM products WHERE productCode like '%$sch%'";
       
       $result = mysqli_query($con,$select);
       if(mysqli_num_rows($result)>0){
           while ($row=mysqli_fetch_assoc($result)) {
            $_SESSION["image"] = $row["imag"];
            $_SESSION["productname"] = $row["name"];
            $_SESSION["productprice"] = $row["price"];
            $_SESSION["quantity"] = $row["quantity"];
            $_SESSION["dat"] = $row["dat"];
        }
     }
?>