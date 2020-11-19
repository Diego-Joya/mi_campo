<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/footer.css">
    <link rel="stylesheet" href="views/css/fontello.css">
   
    
</head>
<body>
    
<div class="header">
    <div class="contenedor">
    <img class = "img-logo" src="views/imagenes/mocho.jpeg" alt="">
        <span class="icon-menu" id="btn-menu"></span>

        <nav class="nav" id="nav">
    <ul class="menu-ul">
        <li class="menu-lis"><a class="menu-link" href="index.php">Notificacion</a></li>
        <li class="menu-lis"><a class="menu-link" href="somos">produccion</a></li>
        <li class="menu-lis"><a class="menu-link" href="contacto">porcentaje produccion</a></li>
        <li class="menu-lis"><a class="menu-link" href="services">salir</a></li>

    </ul>
</nav>
</div>
        
    </div>
    
<section class="cuerpo">
<section>
    <div class="contendenor3">
        <div class="lista">
            <nav class="nav-or">
                <ul class="men-ul">
                    <li class="lis"><a class="munus" href="index.php?action=per_productores.php">Perfil productor</a></li>
                    <li class="lis"><a class="munus" href="index.php?action=transportadores.php">Perfil transportador</a></li>
                    <li class="lis"><a class="munus" href="">Perfil comercinate</a></li>
                    <li class="lis"><a class="munus" href="">productos</a></li>
                    <li class="lis"><a class="munus" href="">ventas</a></li>
                    <li class="lis"><a class="munus" href="">ver productos</a></li>
                    <li class="lis"><a class="munus" href="">comprar productos</a></li>
                    <li class="lis"><a class="munus" href="">ver viajes</a></li>
                </ul>
            </nav>

        </div>
        <div class="vista">
            <?php
                $mvc= new controller();
                $mvc -> enlaces(); 
            ?>
        </div>
    </div>
</section>

    <script src="views/js/animaciones.js"></script>
</body>

</html>