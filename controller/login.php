<?php
require_once '../models/login.php';
class Login
{
    public $datos;
    public function validateEntry($datos)
    {
        $res = ValidateLogin::validateEntry($datos);
        if($res["perfil"] == $datos["perfil"] && $res["usuario"] == $datos["usuario_login"]
         && $res["password"] == md5($datos["password"])){
             echo "true";
            //  header('Location: ../views/modules/productores.php');
         } 
    }
}
$datos = $_POST;
if (isset($datos["function"]) && $datos["function"] == "validateEntry") {
    $a = new Login();
    $a->validateEntry($datos);
}
