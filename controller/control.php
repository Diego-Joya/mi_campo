<?php
class controller
{

    public function plantilla()
    {
        if (isset($_GET["acction"]) && $_GET["acction"] == "administracion") {
            $respuesta = enlacespaginas::enlacespaginasmodel($_GET["acction"]);
            include $respuesta;
        } else {
            include "views/plantilla.php";
        }
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
}
