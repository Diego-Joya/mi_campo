<?php
include '../models/singup.php';

class Register
{
    public $datos;

    public function controlRegister($datos)
    {
        if (isset($datos["password"])) {
            $datos["password"] = md5($datos["password"]);
        }
        if ($datos["perfil"] == "1") {
            $tabla = "productores";
        } else if ($datos["perfil"] == "2") {
            $tabla = "clientes";
        } else if ($datos["perfil"] == "3") {
            $tabla = "transportadores";
        }
        $validate = self::validateFields($datos);
        if ($validate) {
            $res = Singup::singup_users($datos, $tabla);
            echo $res;
        }
    }
    public function loadProfiles($datos)
    {
        $res = Singup::loadProfiles($datos);
        echo $res;
    }
    public function validateUsers($datos)
    {
        $res = Singup::validateUsers($datos);
        echo $res;
    }
    public function validateFields($datos)
    {
        $count = 0;
        foreach ($datos as $d) {
            if (!preg_match('/^[a-zA-Z0-9@]+$/', $d) && $datos["email"] != $d) {
                $count++;
                var_dump($d);
            }
        }
        if ($count > 0) {
            return false;
        } else {
            return true;
        }
    }
}
$datos = $_POST;
if (isset($datos["function"]) && $datos["function"] == "controlRegister") {
    $a = new Register();
    $a->controlRegister($datos);
}
if (isset($datos["function"]) && $datos["function"] == "loadProfiles") {
    $a = new Register();
    $a->loadProfiles($datos);
}
if (isset($datos["function"]) && $datos["function"] == "validateUsers") {
    $a = new Register();
    $a->validateUsers($datos);
}
