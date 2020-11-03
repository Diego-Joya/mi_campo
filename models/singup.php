<?php
require '../models/connection.php';

class Singup extends connection{

    public function singup_users($datos, $tabla){
        $db = connection::connect();
        $sql = "INSERT INTO $tabla ()";
        $db->prepare(" ");


        return $datos;
    }

}