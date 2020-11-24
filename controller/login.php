<?php
require_once '../models/login.php';
class Login
{
    public $datos;
    public function validateEntry($datos)
    {
        $res = ValidateLogin::validateEntry($datos);
        echo $res;
    }
}
$datos = $_POST;
if (isset($datos["function"]) && $datos["function"] == "validateEntry") {
    $a = new Login();
    $a->validateEntry($datos);
}
