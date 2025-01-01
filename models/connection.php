<?php
class connection
{
    public function connect()
    {
        $conect = new PDO("mysql:host=localhost;dbname=mi_campo", "root", "");
        var_dump($conect);
        return $conect;
    }
}
// $pr = new connection;
// $pr->connect();
