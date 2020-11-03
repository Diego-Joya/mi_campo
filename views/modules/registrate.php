<div class="register">
    <form id="registro" action="" method="POST">
        <h1>Registrese</h1>
        <div class="form_registro">
            <div class="information_user">
                <label for="">Nombres</label><br>
                <input type="text" name="nombres" id=""  require><br><br>
                <label for="">Apellidos</label><br>
                <input type="text" name="apellidos" id="" require><br><br>
                <label for="">N° Documento</label><br>
                <input type="text" name="documento" id="" require><br><br>
                <label for="">Celular</label><br>
                <input type="text" name="celular" id=""><br><br>
                <label for="">Email</label><br>
                <input type="text" name="email" id=""><br>
            </div>
            <div class="security_user">
                <label for="">Perfil</label><br>
                <select name="perfil" id="perfil" form="carform" require>
                    <option value="">Seleccione</option>
                    <option value="Productor">Productor</option>
                    <option value="Comerciante">Comerciante</option>
                    <option value="Transportador">Transportador</option>
                </select><br><br>
                <label for="">Usuario</label><br>
                <input type="text" name="usuario" id="" require><br><br>
                <label for="">Contraseña</label><br>
                <input type="password" name="password" id="" require><br><br>
                <label for="">Confirmar contraseña</label><br>
                <input type="password" name="repeat_password" id="" require><br><br>
            </div>
        </div>
        <input type="button" id="register" value="Registrarme">
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../ajax/ajax.js"></script>