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
    <button type="btn " class='float-start'><a href="../displayPanel/data-panel.php"style='text-decoration:none;' >Back</a></button>
        <!--login form-->
        <div class='float-end' style='color: white;font-size:18px;'>
            <?php
            if (isset($_SESSION["user"])) {
                echo $_SESSION["user"];
            }
            ?>
        </div>
    </header>
    <div class="d-flex m-5 p-3">
        <div class="pt-1 ">
            <div class="nav">
                <ul class="nav flex-column ">
                    <li class="nav-item">
                        <a href="../insertData/record-data.php" class="nav-link  text-bg-primary m-2 text-sm-center">Record</a>
                    </li>
                    <li class="nav-item">
                        <a href="../updateData/update-data.php" class="nav-link text-bg-primary m-2 text-sm-center">Update</a>
                    </li>
                    <li class="nav-item">
                        <a href="../searchData/search-product.php" class="nav-link text-bg-primary m-2 text-sm-center">Search</a>
                    </li>
                    <li class="nav-item">
                        <a href="../displayData/display-product.php" class="nav-link  text-bg-primary m-2 text-sm-center">Display</a>
                    </li>
                    <li class="nav-item">
                        <a href="../deleteData/delete-product.php" class="nav-link  text-bg-primary m-2 text-sm-center">Delete</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container ms-lg-5">
            <fieldset>
            <h2> Record Item</h2>
                <form action="../insertData/insert-data.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="product image" class="form-label">Product image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="product name" class="form-label">Product name</label>
                        <input type="text" name="product" class="form-control">
                    </div>
                    <div lass="mb-3 mt-3">
                        <label for="product name" class="form-label">Product number</label>
                        <input type="text" name="product-number" class="form-control">
                    </div>
                    <div lass="mb-3 mt-3">
                        <label for="Product price" class="form-label"> Product price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div lass="mb-3 mt-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" name="quantity" class="form-control">
                    </div>
                    <div class="mb-3 mt-3">
                    <input type="hidden" name="dat" value='<?php echo date("Y-m-d h:i:s"); ?>'>
                    </div>
                    <input type="submit" name="submit" value="Add">
                </form>
            </fieldset>
        </div>
    </div>
</body>

</html>