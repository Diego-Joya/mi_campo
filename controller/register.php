<?php

class Register
{


    public function controlRegister()
    {
        return 'prebau';
    }
}
$a = new Register();
if (isset($_POST["function"])) {
    $a->controlRegister();
}
