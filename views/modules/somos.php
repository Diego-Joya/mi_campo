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
    <p>Somos un grupo de campesinos, comerciantes y transportadores en búsqueda de un comercio mas justo y competitivo
        con igualdad de condiciones para todos.
        A través de esta plataforma se busca beneficiar tanto a campesinos como a comerciantes, ya que ellos tendrán un
        mayor facilidad para poder vender sus productos sin necesidad de intermediarios y los comerciantes podrán surtir
        sus negocios comprando directamente a los campesinos.
    </p>
    <h3 class="subtitulos">QUE LOGRAMOS</h3>
    <P>con su ayuda lograremos beneficiar a muchos productores que presentas inconvenientes para poder vender sus proodutos, ayudaremos a que su trabajo sea bien valorado y mejoren sus condiciones de vida.</P>

    <div class="flex">
    <div class="flex2"><a href="registrate"><img class="perfil" src="views/imagenes/gallinas2.jpg" alt=""></a></div>
<div class="flex2"><a href="registrate"><img class="perfil" src="views/imagenes/gallinas.jpg" alt=""></a></div>

    </div>
</article>