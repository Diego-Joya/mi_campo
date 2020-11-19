<?php 
 class enlacespaginas{
 public function enlacespaginasmodel($enlacesmodel){
     if($enlacesmodel== "contacto"||
        $enlacesmodel == "login"||
        $enlacesmodel == "registrate"||
        $enlacesmodel == "services" ||
        $enlacesmodel == "somos"){
        
            $module = "views/modules/".$enlacesmodel.".php";
        }
        else if( $enlacesmodel == "index.php"){ 
            $module = "views/modules/inicio.php";
        }
        else if( $enlacesmodel == "inicio"){ 
            $module = "views/modules/inicio.php";
        }
        else if( $enlacesmodel == "administracion"){ 
            $module = "views/administracion.php";
        }
        else if( $enlacesmodel == "fallo"){ 
            $module = "views/modules/login.php";
         
        }
        else{
            $module = "views/modules/inicio.php";
        }
     
     return$module;
 }
 



 }


?>
