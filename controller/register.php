<?php
include '../models/singup.php';

class Register
{
    public $datos;

    public function controlRegister($datos)
    {
        if ($datos["perfil"] == "Productor") {
            $tabla = "productores";
        }else if($datos["perfil"] == "Comerciante"){
            $tabla = "clientes";
        }else if($datos["perfil"] == "Transportador"){
            $tabla = "transportadores";
        }
        $res = Singup::singup_users($datos, $tabla);
        
        echo $res;
    }
}
$datos = ($_POST);
foreach ($datos as $r) {
    if (isset($r["function"]) && $r["function"] == "controlRegister") {
        $a = new Register();
        $a->controlRegister($datos);
    }
}
