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
<body style="background-image: url('../image/backgroundimage.jpg'); background-position: fixed;">
    <!--header-->
    <header class="container-fluid  bg-primary p-5 text-lg-center">
    <h1>Stock Management System</h1>
    </header>
    <!--login-->
    <div class="container text-lg-center pt-5" >
        <form method="POST" action="">
            <input type="text" name="usern" placeholder="user">
            <input type="password" name="pass" placeholder="password">
            <input type="submit" name="submit" value=" Login">
        </form>
    </div>
    
    <?php
    include "login-data.php";
    $user = filter_input(INPUT_POST, "usern");
    $pass = filter_input(INPUT_POST, "pass");
    if (isset($_SESSION["user"])) {
        if ($_SESSION["user"] == $user and $_SESSION["pasw"] == $pass) {
            echo $_SESSION["user"];
            header("Location:../displayPanel/data-panel.php");
        }
    }
    ?>
</body>

</html>