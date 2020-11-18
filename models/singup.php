<?php
require '../models/connection.php';

class Singup extends connection
{

    public function singup_users($datos, $tabla)
    {
        $fecha = date('Y-m-d');
        if (isset($datos["usuario"])) {
            $sql = "INSERT INTO usuarios (fecha,nombre,apellidos,celular,usuario,password,email,perfil)
                 VALUES (:fecha,:nombre,:apellidos,:celular,:usuario,:password,:email,:perfil)";
            $db = connection::connect()->prepare($sql);
            $db->bindParam(":fecha", $fecha);
            $db->bindParam(":nombre", $datos["nombres"], PDO::PARAM_STR);
            $db->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
            $db->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
            $db->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $db->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
            $db->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $db->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
            if (!$db->execute()) {
                var_dump($db->errorInfo());
                return "false";
            }
            $sql = "select id from usuarios where usuario=:usuario";
            $db = connection::connect()->prepare($sql);
            $db->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
            if (!$db->execute()) {
                var_dump($db->errorInfo());
                return "false";
            }
            $usr = $db->fetch();
        }

        $sql = "INSERT INTO $tabla (nombre,apellidos,celular,genero,tipo_identificacion,no_documento,email,id_usuario) VALUES 
        (:nombre,:apellidos,:celular,:genero,:tipo_identificacion,:no_documento,:email,:id_usuario)";
        $db = connection::connect()->prepare($sql);
        $db->bindParam(":nombre", $datos["nombres"], PDO::PARAM_STR);
        $db->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
        $db->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
        $db->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
        $db->bindParam(":tipo_identificacion", $datos["tipo"], PDO::PARAM_STR);
        $db->bindParam(":no_documento", $datos["documento"], PDO::PARAM_STR);
        $db->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $db->bindParam(":id_usuario", $usr["id"], PDO::PARAM_INT);
        if (!$db->execute()) {
            var_dump($db->errorInfo());
            return "false";
        }

        return "true";
        // $db->close();
    }
    public function loadProfiles($dato)
    {
        $db = connection::connect()->prepare("select * from  perfiles");
        if (!$db->execute()) {
            // var_dump($db->errorInfo());
            return "false";
        }
        $res = $db->fetchAll();
        return json_encode($res);
    }
    public function validateUsers($p)
    {
        $db = connection::connect()->prepare("select * from  usuarios where usuario=:usuario");
        $db->bindParam(":usuario", $p["usuario"], PDO::PARAM_STR);
        if (!$db->execute()) {
            // var_dump($db->errorInfo());
            return "false";
        }
        $res = $db->fetch();
        if (!empty($res)) { 
            return json_encode($res);
            
        } else {
            return "false";
        }
    }
}
