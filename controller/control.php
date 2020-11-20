<?php
class controller
{

    public function plantilla()
    {
        if (isset($_GET["acction"]) && $_GET["acction"] == "administracion" || isset($_GET["action"])) {
            include "views/administracion.php";
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

    //llamar productos de la base de datos

    public function cultivoscontroller()
    {
        $respuesta = enlacespaginas::cultivosmodel("productos");
        foreach ($respuesta as $row => $item) {
            echo '<tr>
            <td>' . $item["id_producto"] . '</td>
            <td>' . $item["nomb_producto"] . '</td>
            <td>' . $item["tipo_producto"] . '</td> 
            <td><input type="checkbox"></td>
            <td><input type="text" name="cantidad"></td>
        </tr>';
        }
    }



}


    // navegacion pagina administracion
    public function enlacesadministracioncontroller()
    {
        if (isset($_GET["action"])) {
            $enlacescontroller = $_GET["action"];
        } else {
            $enlacescontroller = "administracion.php";
        }
        $respuesta = enlacespaginas::enlacesadministracionmodel($enlacescontroller);
        include $respuesta;
    }
}
