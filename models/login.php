<?php
require '../models/connection.php';
require '../models/_sessiones.php';

class ValidateLogin extends connection
{
    public function validateEntry($p)
    {
        $db = connection::connect()->prepare("select * from usuarios where usuario=:usuario and perfil=:perfil");
        $db->bindParam(":usuario", $p["usuario_login"], PDO::PARAM_STR);
        $db->bindParam(":perfil", $p["perfil"], PDO::PARAM_INT);
        if (!$db->execute()) {
            var_dump($db->errorInfo());
            return "false";
        }

        $usr = $db->fetch();
        if($usr["perfil"] == $p["perfil"] && $usr["usuario"] == $p["usuario_login"]
        && $usr["password"] == md5($p["password"])){
            $r = session::initSession($usr);
            if($r){
                return "true";
            }
            return "false";
        } 

    }

    // llamar productos de la bbdd
    public function cultivosmodel($tabla)
    {
        $prod = connection::connect()->prepare("SELECT id_producto,nomb_producto,tipo_producto FROM $tabla");
        $prod->execute();
        return $prod->fetchAll();
    }
    
}
