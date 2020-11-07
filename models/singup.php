<?php
require '../models/connection.php';

class Singup extends connection
{

    public function singup_users($datos, $tabla)
    {
        $sql = "INSERT INTO $tabla (nombre,apellidos,celular,genero,tipo_identificacion,no_documento,email) VALUES (:nombre,:apellidos,:celular,:genero,:tipo_identificacion,:no_documento,:email)";
        $db = connection::connect()->prepare($sql);
        $db->bindParam(":nombre", $datos["nombres"], PDO::PARAM_STR);
        $db->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
        $db->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
        $db->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
        $db->bindParam(":tipo_identificacion", $datos["tipo"], PDO::PARAM_STR);
        $db->bindParam(":no_documento", $datos["documento"], PDO::PARAM_STR);
        $db->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        if (!$db->execute()) {
            // var_dump($db->errorInfo());
            return "false";
        }
        if(isset($datos["usuario"])){
            $sql = "INSERT INTO usuarios (nombre,apellidos,celular,fecha,usuario,password,email,perfil) VALUES (:nombre,:apellidos,:celular,:genero,:tipo_identificacion,:no_documento,:email)";
            $db = connection::connect()->prepare($sql);
            $db->bindParam(":nombre", $datos["nombres"], PDO::PARAM_STR);
            $db->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
            $db->bindParam(":fecha", date('Y-m.-d'));
            $db->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
            $db->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $db->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
            $db->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $db->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
            if (!$db->execute()) {
                // var_dump($db->errorInfo());
                return "false";
            }

        }

        // return $db->fetch();
        return "true";
        // $db->close();
    }
}
