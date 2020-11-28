<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: administracion");
}
?>
<div class="login">
    <h2>INGRESE A MI CAMPO</h2>
    <form action="" id="login">
        <div class="information_user">
            <label for="">Perfil</label>
            <div class="icon-input">
                <div class="selec"><i class="material-icons">list</i>
                    <select name="perfil" id="perfil" form="perfil" require>
                        <option value="">Seleccione</option>
                    </select>
                </div>
            </div>
            <label for="">Usuario</label>
            <div class="icon-input">
                <div class="icon"><i class="material-icons">account_circle</i></div>
                <input type="text" name="usuario_login" id="usuario_login" placeholder="Usuario" required>
            </div>
            <label for="">Contraseña</label>
            <div class="icon-input">
                <div class="icon"><i class="material-icons">lock</i></div>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>
        </div>
        <input type="button" id="send" value="INGRESAR">
    </form>

</div>


<script src="views/ajax/login.js"></script>