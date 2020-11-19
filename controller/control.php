<?php
class controller
{

    public function plantilla()
    {
        include "views/plantilla.php";
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
