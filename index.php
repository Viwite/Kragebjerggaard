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

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include "includes/navigation.php"; ?>




<?php include "includes/footer.php"; ?>

<?php
require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter");

foreach ($produkter as $produkt){
    echo $produkt->produktName . "<br>";
}
?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
    import Produkter from "./js/produkter.js";

    const produkter = new Produkter();
    produkter.init();
</script>
</body>
</html>