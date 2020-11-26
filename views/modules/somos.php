<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: administracion");
}
?>
<section id="banner">
    <img src="views/imagenes/somos1.jpg" alt="">
    <div class="contenedor">
        <h1>SOMOS TU APOYO </h1>

    </div>
</section>

<article class="contenerdor2">
    <h2>¿Eres comerciante?</h2>
    <p>Si eres dueño de un negocio en el cual vende productos del campo esta plataforma es para ti.
         A traves de ella podras conseguir los productos de una manera mas rapida y comprando directamente a los capesinos. <strong>Ayudemos al Cambio, se parte de este gran y soñado cambio</strong> 
    </p>
    <h3 class="subtitulos">QUE LOGRAMOS</h3>
    <P>con su ayuda lograremos beneficiar a muchos productores que presentas inconvenientes para poder vender sus proodutos, ayudaremos a que su trabajo sea bien valorado y mejoren sus condiciones de vida.</P>

    <div class="flex">
    <div class="flex2"><a href="registrate"><img class="perfil" src="views/imagenes/gallinas2.jpg" alt=""></a></div>
<div class="flex2"><a href="registrate"><img class="perfil" src="views/imagenes/gallinas.jpg" alt=""></a></div>

    </div>
</article>