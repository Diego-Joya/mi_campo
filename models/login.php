<?php
require '../models/connection.php';

class ValidateLogin extends connection
{
    public function validateEntry($p)
    {
        $db = connection::connect()->prepare("select * from usuarios where usuario=:usuario and perfil=:perfil");
        $db->bindParam(":usuario", $p["usuario"], PDO::PARAM_STR);
        $db->bindParam(":perfil", $p["perfil"], PDO::PARAM_INT);
        if (!$db->execute()) {
            var_dump($db->errorInfo());
            return "false";
        }

        $usr=$db->fetch();
        return $usr;
    }
}
