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

<body>
    <!--header-->
    <header class="container-fluid  bg-primary p-5 text-lg-center">
        <h1>Stock Management System</h1>
        <button type="btn " class='float-start'><a href="../displayPanel/data-panel.php"
                style='text-decoration:none;'>Back</a></button>
        <!--login form-->
        <div class='float-end' style='color: white;font-size:18px;'>
            <?php
            if (isset($_SESSION["user"])) {
                echo $_SESSION["user"];
            }
            ?>
        </div>
    </header>
    <div class="container  pt-5">
        <fieldset>
            <h2>Delete Product</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="product-number" class="form-label">Product number</label>
                <input type="text" name="product-number" class="form-control"><br><br>
                <input type="submit" name="submit" value="Delete">
            </form>
        </fieldset>
    </div>
</body>

</html>