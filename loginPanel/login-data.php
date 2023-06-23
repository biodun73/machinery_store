<?php
        $con = mysqli_connect("localhost","root","","store");
        $user = filter_input(INPUT_POST,"usern");
        $pass = filter_input(INPUT_POST,"pass");
        
        $select = "SELECT * FROM login WHERE usern= '$user'  AND passw= '$pass' ";
        $query = mysqli_query($con,$select);
        while($row = mysqli_fetch_assoc($query)){
              $_SESSION["user"]= $row["usern"];
              $_SESSION["pasw"]= $row["passw"];
              //header("Location: index.php");
        }
    