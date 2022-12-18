<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include "includes/navigation.php"; ?>

<div class="container-fluid p-0">
    <img class="w-100" src="uploads/Asset%2014-8.png" alt="banner">
</div>

<div class="container-fluid" style="background-color: #f1f1f1;">
    <div class="row py-5 mx-1 d-flex">
        <div class="col-12 col-lg-4 justify-content-between">
            <img src="uploads/informerende%20illustartion.png" alt="informerende illustration">
        </div>
        <div class="col-12 col-lg-8 justify-content-evenly">
            <h1 class="text m-5" style="text-align: center; font-family: 'Lato', sans-serif;"><b>Velkommen til Kragebjerggård</b></h1>
            <br><br>
            <h5 class="text" style="text-align: center; font-family: mr-eaves-modern, sans-serif; font-style: normal; font-weight: 100;">Dit sted for nemme økologiske madløsninger</h5>
            <br>
            <h5 class="text" style="text-align: center; font-family: mr-eaves-modern, sans-serif; font-style: normal; font-weight: 100;">Lige så let som det vises til venstre</h5>

            <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 150px;">
                <a class="btn btn-success" href="shop.php"><h3 class="btn-text text-decoration-none">Shop</h3></a>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

