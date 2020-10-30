<?php
include '../models/singup.php';

class Register
{
    public $datos;

    public function controlRegister($datos)
    {
        $res = Singup::singup_users($datos);
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