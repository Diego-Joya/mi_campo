<?php
session_start();
class session
{
    public static function initSession($p)
    {

        $_SESSION["usuario"] = $p["usuario"];
        $_SESSION["id"] = $p["id"];
        $_SESSION["perfil"] = $p["perfil"];
        return true;
    }
}
