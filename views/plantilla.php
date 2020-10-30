<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi campo</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/fontello.css">
    <link rel="stylesheet" href="views/css/footer.css">
</head>
<body>
    <?php
     include "views/modules/header.php";?>
<section><?php
    $mvc = new controller();
    $mvc ->  enlacespaginascontroller();
    ?></section>

<?php

  
    include "views/modules/footer.php";
    ?>

    <script src="views/js/animaciones.js"></script>
    </body>
</html>