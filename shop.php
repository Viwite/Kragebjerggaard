<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kragebjerggaard</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/f62ad73f45.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include "includes/navigation.php"; ?>

<div class="container-fluid p-0" style="background: #f1f1f1;">

    <img class="w-100" src="uploads/Asset%2014-9.png" alt="banner">

    <br>

    <div class="produkter">
        <div class="filter p-2">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <input type="search" class="form-control nameSearch" placeholder="Søg og du skal finde">
                </div>
            </div>
        </div>

        <h1 class="class-text p-1" style="text-align: center">Produkter</h1>

        <div class="items mt-5">
            <!--Produkterne-->
        </div>
    </div>

</div>


<?php include "includes/footer.php"; ?>

<?php
require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter");


?>
<?php
?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
    import Produkter from "./js/produkter.js";

    const produkter = new Produkter();
    produkter.init();
</script>
</body>
</html>