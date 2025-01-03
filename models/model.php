<?php
require_once "connection.php";
class enlacespaginas extends connection
{
    public static function enlacespaginasmodel($enlacesmodel)
    {
        if (
            $enlacesmodel == "contacto" ||
            // $enlacesmodel == "login" ||
            $enlacesmodel == "administracion" ||
            $enlacesmodel == "registrate" ||
            $enlacesmodel == "services" ||
            $enlacesmodel == "somos"
        ) {
            if ($enlacesmodel == "administracion") {

                $module = "views/" . $enlacesmodel . ".php";
            } else {
                $module = "views/modules/" . $enlacesmodel . ".php";
            }
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

    public static function enlacesadministracionmodel($enlacesmode)
    {
        if (
            $enlacesmode == "pag-transportadores" ||
            $enlacesmode == "pag-comerciantes" || $enlacesmode == "ver-productos" ||
            $enlacesmode == "ventas" || $enlacesmode == "productos" ||
            $enlacesmode == "comprar-productos" ||
            $enlacesmode == "siembras" ||
            $enlacesmode == "viajes" ||
            $enlacesmode == "security_user" ||
            $enlacesmode == "datos_user" ||

            $enlacesmode == "pag-productores"
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
    // llamar departamentos
    public function departamentosmodel($tabla)
    {
        $departamento = connection::connect()->prepare("SELECT name FROM $tabla order by name asc");
        $departamento->execute();
        return $departamento->fetchAll();
    }

    //llamar municipios

    public function municipiosmodel($tabla)
    {
        $municipio = connection::connect()->prepare("SELECT name FROM $tabla order by name asc");
        $municipio->execute();
        return $municipio->fetchAll();
    }
}
