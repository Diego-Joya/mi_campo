<?php

class controller{

    public function plantilla(){
        include "views/plantilla.php";
    }

public function enlacespaginascontroller(){
    if ( isset( $_GET["acction"])){
        $enlacescontroller = $_GET["acction"];
    }
  else {
      $enlacescontroller = "index.php";
  }
     $respuesta = enlacespaginas :: enlacespaginasmodel($enlacescontroller);
     include $respuesta;

}

public function entrar(){
    if(isset($_POST["perfil"])){
                        $datoscontroller= array("perfil"=>$_POST["perfil"],
                        "usuario"=>$_POST["usuario"],
                        "password"=>$_POST["password"]  );}
                        
    $respu=Singup::entrarmodel($datoscontroller,"usuarios");
    
    if($respu["perfil"]==$_POST["perfil"]&&$respu["usuario"]==$_POST["usuario"]
                        &&$respu["password"]==$_POST["password"]){
                            header("location:productores.php");
                        }
                        else{
                            header("location:fallo.php");

                        }
                        
    }
     
}








?>