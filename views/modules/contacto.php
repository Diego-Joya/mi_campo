<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: administracion");
}
?>
<section id="banner">
    <img src="views/imagenes/contactenos.jpg" alt="">
    <div class="contenedor">
        <h1>CONTACTENOS</h1>

    </div>
</section>
<div class="contactenos">
    <h2>FORMULARIO DE CONTACTENOS</h2>
    <form action="">
        <label for="">NOMBRE Y APELLIDO</label> </br>
        <input type="text" placeholder="escriba su nombre y apellido" require> </br>
        <label for="">CORRREO ELECTRONICO</label> </br>
        <input type="text" placeholder="escriba su correo electronico" require> </br>
        <label for="">mensaje</label> </br>
        <textarea name="" id="" cols="60" rows="18"></textarea> </br>

        <input type="submit" id="" value="enviar">

    </form>
</div>