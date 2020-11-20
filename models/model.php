<?php
require_once "connection.php";
class enlacespaginas extends connection
{
    public function enlacespaginasmodel($enlacesmodel)
    {
        if (
            $enlacesmodel == "contacto" ||
            $enlacesmodel == "login" ||
            $enlacesmodel == "registrate" ||
            $enlacesmodel == "services" ||
            $enlacesmodel == "somos"
        ) {

            $module = "views/modules/" . $enlacesmodel . ".php";
        } else if ($enlacesmodel == "index.php") {
            $module = "views/modules/inicio.php";
        } else if ($enlacesmodel == "inicio") {
            $module = "views/modules/inicio.php";
        } else if ($enlacesmodel == "administracion") {
            $module = "views/administracion.php";
        } else if ($enlacesmodel == "fallo") {
            $module = "views/modules/login.php";
        } else {
            $module = "views/modules/inicio.php";
        }

        return $module;
    }

    public function enlacespaginascontroller()
    {

        if (isset($_GET["acction"])) {
            $enlacescontroller = $_GET["acction"];
        } else {
            $enlacescontroller = "index.php";
        }
        $respuesta = enlacespaginas::enlacespaginasmodel($enlacescontroller);
        include $respuesta;
    }


    // enlaces paginas administracion

    public function enlacesadministracionmodel($enlacesmode)
    {
        if (
            $enlacesmode == "pag-transportadores" ||
            $enlacesmode == "pag-comerciantes" || $enlacesmode == "ver-productos" ||
            $enlacesmode == "ventas" || $enlacesmode == "ver-productos" ||
            $enlacesmode == "comprar-productos"
        ) {
            $modulo = "views/modules/" . $enlacesmode . ".php";
        } else if ($enlacesmode == "administracion.php") {
            $modulo = "views/modules/pag-productores.php";
        }
        return $modulo;
    }


    // llamar productos de la bbdd
    public function cultivosmodel($tabla)
    {
        $prod = connection::connect()->prepare("SELECT id_producto,nomb_producto,tipo_producto FROM $tabla");
        $prod->execute();
        return $prod->fetchAll();
    }
}
