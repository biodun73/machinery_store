<?php
session_start();
include "../displayData/display-data.php";
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
    <header  class="container-fluid  bg-primary p-5 text-lg-center">
        <h1>Stock Management System</h1>
    </header>
    <!--login-->
        <form method="GET" action="" class="container input-group p-5 m-5">
             <button class="btn btn-primary text-bg-light"><a href="../displayPanel/data-panel.php" style="color:black; text-decoration:none;">Back</a></button>
            <input type="search" name="search" size="15" class="form-control">
            <button type="submit" name="submit" id="" class="btn btn-primary">Search</button>
        </form>
    </>

       <div class=" container ms-3 text-center">
    <?php
    echo "";
    if (isset($_GET["submit"])) {
        echo "<div style=' margin-top:60px; margin-left:400px;'>";
        echo "<img src=" . $_SESSION['image'] . " width=300px height=200>";
        echo "</div>";
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Product Name</th>";
        echo "<th>Product Price</th>";
        echo "<th>Quantity</th>";
        echo "<th>Product Date</th>";
        echo "<tr>";
        echo "<tr>";
        echo "<td>" . $_SESSION['productname'] . "</td>";
        echo "<td>" . "$" . $_SESSION['productprice'] . "</td>";
        echo "<td>" . $_SESSION['quantity'] . "</td>";
        echo "<td>" . $_SESSION['dat'] . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
    }
    ?>
    </div>
</div>
</body>

</html>