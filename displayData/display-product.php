<?php
session_start();
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Store item</title>
</head>

<body>
    <!--header-->
    <header class="container-fluid  bg-primary p-5 text-lg-center">
    <h1>Stock Management System</h1>
    <button type="btn " class='float-start'><a href="../displayPanel/data-panel.php"style='text-decoration:none;'>Back</a></button>
    <div class='float-end' style='color: white;font-size:18px;'>
            <?php
            if (isset($_SESSION["user"])) {
                echo $_SESSION["user"];
            }
            ?>
        </div>
   </header>
    <!--login-->
    <div class="container m-5 p-3 text-center">
       <?php
    //connection
    $con = mysqli_connect("localhost","root","","store");
    $sch = filter_input(INPUT_POST,'search');
    $select = "SELECT * FROM products";
    
    $result = mysqli_query($con,$select);
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
         $image = $row["imag"];
         $productname = $row["name"];
         $productprice= $row["price"];
         $quantity= $row["quantity"];
         $dat = $row["dat"];
         
        echo "<div class=' card m-2 p-2'>";
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Product Image</th>";
        echo "<th>Product Name</th>";
        echo "<th>Product Price</th>";
        echo "<th>Product Quantity</th>";
        echo "<th>Product Date</th>";
        echo "<tr>";
        echo "<tr>";
        echo "<td><img src=" . $image . " width=200px height=100></td>";
        echo "<td>" . $productname. "</td>";
        echo "<td>" ."$". $productprice . "</td>";
        echo "<td>" . $quantity. "</td>";
        echo "<td>" .  $dat. "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
     }
  }
?>
    
    </div>

</body>

</html>