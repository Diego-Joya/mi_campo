<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: administracion");
}
?>
<div class="banner"> <div class="slaider">
    <ul>
        <li><img class="tamaño" src="views/imagenes/servicios.jpg" alt=""></li>
        <li><img class="tamaño" src="views/imagenes/somos.jpg" alt=""></li>
        <li><img class="tamaño" src="views/imagenes/mocho.jpg" alt=""></li>
    </ul>
    <h1 class="posicion">BENEFICIOS PARA TODOS</h1>
    <p >PRODUCTORES, COMERCIANTES Y TRANSPORTADORES</p>
</div>
</div>
<section>
<article class="contenerdor2">
    <p>Mi campo es una plataforma que busca ayudar a campesinos a vender con mayor facilidad y que comerciantes puedan conseguir productos para surtir su negocio.
     </p>
     <p>buscamos devolver las esperanzas en el campo, hacer que la poblacion vuelva hacia los campos y  vean ganancias</p>

     <h3 class="subtitulos">¿ERES COMERCIANTES?</h3>
     <P>Si usted es dueño de un negocio en el cual vende produtos del campo esta plataforma es para ti. Aca podras consegirlos de una manera mas rapida y apoyando directamnete a los campesinos... usted hara parte de este gran cambio.</P>
    
    </article>
</section>