<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>

<body style="background-image: url('../image/backgroundimage.jpg'); background-position: fixed;">
    
    <!--header-->
    <header class="container-fluid  bg-primary p-5 text-lg-center">
    <h1>Stock Management System</h1>
        <form method="POST" action="../signoutPanel/signout.php" class="float-start" >
            <input type="submit" name="logoff" value="Log out">
        </form>
    
        <div class='float-end' style='color: white;font-size:18px;'>
            <?php
            if (isset($_SESSION["user"])) {
                echo $_SESSION["user"];
            }
            ?>
        </div>
   
    </header>
    <div class="d-flex">
        <div class="row mt-5">
            <div class="col-sm-3 ">
                <ul class=" nav flex-column">
                    <li class="nav-item">
                        <a href="../insertData/record-data.php" 
                        class="nav-link m-2 text-sm-center text-bg-primary m-2">Record</a>
                    </li>
                    <li class="nav-item">
                        <a href="../updateData/update-data.php" 
                        class="nav-link  m-2 text-sm-center text-bg-primary m-2">Update</a>
                    </li>
                    <li class="nav-item">
                        <a href="../searchData/search-product.php" 
                        class="nav-link m-2 text-sm-center text-bg-primary m-2">Search</a>
                    </li>
                    <li class="nav-item">
                        <a href="../displayData/display-product.php" 
                        class="nav-link m-2 text-sm-center text-bg-primary m-2">Display</a>
                    </li>
                    <li class="nav-item">
                        <a href="../deleteData/delete-product.php" class="nav-link  m-2 text-sm-center text-bg-primary m-2">Delete</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div id="display-chart" style="margin-left: 300px;margin-top:25px;"></div>
            </div>
    </div>
</div>
    <div class="right">

    </div>
</body>

</html>