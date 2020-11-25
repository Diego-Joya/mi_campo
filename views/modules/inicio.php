<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: administracion");
}
?>
    <section id="banner">
          <img src="views/imagenes/f-inicio (2).jpg" alt="">
          <div class="contenedor">
          <h1>BIENVENIDOS A MI CAMPO</h1> 
         
          </div>
      </section>
      <article class="contenerdor2">

      <h2 class="subtitulos">EN QUE CONSISTE</h2>
        <P>Es una plataforma web para <strong> la comercialización de productos campesinos</strong>, de  esta forma podrán vender sus productos con mayor  facilidad y sin necesidad de intermediarios.
Atreves de esta plataforma se verán beneﬁciados  tanto productores, comerciantes y transportadores de  alimentos ya que los campesinos podrán ofrecer sus  productos a cualquier parte del país y cualquier  comerciante podrá ver los productos que están  disponibles en el momento y hacer sus pedidos si lo  desean.
</P>

<h2 class="subtitulos">¿COMO REGISTRARSE?</h2>

<div class="flex">
<div class="flex2"><a href="registrate"><img class="perfil" src="views/imagenes/productores.png" alt=""></a></div>
<div class="flex2"><a href="registrate"><img class="perfil" src="views/imagenes/comerciante.png" alt=""></a></div>
<div class="flex2"><a href="registrate"><img class="perfil" src="views/imagenes/transportadores.png" alt=""></a></div>


</div>

  <p class="parrafo2"><strong class="subtitulos"> Productores </strong>: pueden registrar dueños de fincas que esten interesados en vender sus productos.</p>  
  <p class="parrafo2"><strong  class="subtitulos">Comerciantes </strong>: bajo este perfil se registran dueños de negocios que esten interesados en adquirir productos campesinos con una mayor facilidad ya que estan negociando directamente con los productores.</p>  
  <p class="parrafo2"><strong  class="subtitulos">Transportadores</strong>:se registran dueños de vehiculos que esten interesados en transportar los productos a los diferentes puntos acordados para la entrega. </p>
      </article>

