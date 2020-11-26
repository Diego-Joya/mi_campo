<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: inicio");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un paso al progreso</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/footer.css">
    <link rel="stylesheet" href="views/css/fontello.css">
   <link rel="stylesheet" href="views/css/login.css">
        
</head>

<body>
    <div class="header">
        <div class="contenedor">
            <img class="img-logo" src="views/imagenes/logo.jpeg" alt="">
            <span class="icon-menu" id="btn-menu"></span>


            <nav class="nav" id="nav">
                <ul class="menu-ul">
                    <li class="menu-lis"><a class="menu-link" href="index.php">Notificacion</a></li>
                    <li class="menu-lis"><a class="menu-link" href="somos">produccion</a></li>
                    <li class="menu-lis"><a class="menu-link" href="contacto">porcentaje produccion</a></li>
                    <li class="menu-lis" id="close"><i class="material-icons">power_settings_new</i>salir</li>

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
                            <li class="lis"><i class="material-icons">arrow_drop_down</i><a class="munus" href="">Perfil</a>
                                <ul>
                                    <li class="lis"><a class="munus" href="index.php?action=security_user">Seguridad</a></li>
                                    <li class="lis"><a class="munus" href="index.php?action=datos_user">Datos</a></li>
                                </ul>
                            </li>

                            <?php
                            if ($_SESSION["perfil"] == 1) {
                            ?>
                                <li class="lis"><a class="munus" href="index.php?action=pag-productores">Configuración</a>
                                <?php
                            } else if ($_SESSION["perfil"] == 2) {

                                ?>
                                <li class="lis"><a class="munus" href="index.php?action=pag-transportadores">Configuración</a></li>
                            <?php
                            } else if ($_SESSION["perfil"] == 3) {
                            ?>
                                <li class="lis"><a class="munus" href="index.php?action=pag-comerciantes">Configuración</a></li>

                            <?php
                            }
                            ?>
                            <li class="lis"><a class="munus" href="index.php?action=productos">Productos</a></li>
                            <li class="lis"><a class="munus" href="index.php?action=ventas">ventas</a></li>
                            <li class="lis"><a class="munus" href="index.php?action=comprar-productos">comprar productos</a></li>
                            <li class="lis"><a class="munus" href="index.php?action=viajes">ver viajes</a></li>
                            <li class="lis"><a class="munus" href="index.php?action=siembras">siembras</a></li>
                            <li class="lis"><a class="munus" href="index.php?action=contraseña">Cambiar contraseña</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="vista">
                    <?php
                    $mvc = new controller();
                    $mvc->enlacesadministracioncontroller();
                    ?>
                </div>
            </div>
        </section>
        <script src="views/js/animaciones.js"></script>
        <script src="views/js/index.js"></script>
</body>

</html>