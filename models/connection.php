<?php
class connection
{
    public function connect()
    {
        $conect = new PDO("mysql:host=localhost;dbname=cms", "root", "");
        return $conect;
    }
}
