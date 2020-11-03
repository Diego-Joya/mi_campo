<?php
class connection
{
    public function connect()
    {
        $conect = new PDO("mysql:host=localhost;dbname=mi_campo", "root", "");
        return $conect;
    }
}
