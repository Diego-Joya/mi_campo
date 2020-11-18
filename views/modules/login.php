<div class="login">
    <h2>INGRESO A MI CAMPO</h2>
    <form action="" id="login">
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
            <input type="text" name="usuario_login" id="usuario_login" placeholder="&#128100; escriba su usuario" require><br><br>
        </div>
        <label for="">Contraseña</label>
        <div class="icon-input">
            <input type="password" name="password" id="password" placeholder="&#128272; escriba su contraseña" require><br><br>
        </div>
        <input type="button" id="send" value="INGRESAR">
    </form>
</div>
<script src="views/ajax/login.js"></script>