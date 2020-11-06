<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi campo</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/fontello.css">
    <link rel="stylesheet" href="views/css/footer.css">
    <link rel="stylesheet" href="views/css/banner.css">
    <link rel="stylesheet" href="views/css/servicios.css">
    <link rel="stylesheet" href="views/css/inicio.css">
</head>

<body>
    <?php
    include "views/modules/header.php"; ?>
    <section class="cuerpo">
        <?php
        $mvc = new controller();
        $mvc->enlacespaginascontroller();
        ?>
   <footer>    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="views/ajax/ajax.js"></script>
    
        <?php
        include "views/modules/footer.php";
        ?>
   
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="views/ajax/ajax.js"></script>
    <script src="views/js/animaciones.js"></script>
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 
</body>

</html>