<div class="register">
    <form id="registro" action="" method="POST">
        <h1>Registrese</h1>
        <div class="form_registro">
            <div class="information_user">
                <label for="">Nombres</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">person</i></div>
                    <input type="text" name="nombres" id="nombres" required>
                </div><br>
                <label for="">Apellidos</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">person</i></div>
                    <input type="text" name="apellidos" id="apellidos" required>
                </div><br>
                <label for="">Tipo indentificación</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">list</i></div>
                    <select name="tipo" id="tipo" form="tipo" required>
                        <option value="">Seleccione</option>
                        <option value="Cedula">Cedula</option>
                        <option value="Nit">Nit</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div><br>
                <label for="">N° Documento</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">picture_in_picture</i></div>
                    <input type="text" name="documento" id="documento" required>
                </div><br>
                <label for="">Genero</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">list</i></div>
                    <select name="genero" id="genero" form="genero" required>
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div><br>
                <label for="">Celular</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">phone_iphone</i></div>
                    <input type="text" name="celular" id="celular"><br><br>
                </div><br>
                <label for="">Email</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">mail</i></div>
                    <input type="text" name="email" id="email" required><br>
                </div><br>
            </div>
            <div class="security_user">
                <label for="">Perfil</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">list</i></div>
                    <select name="perfil" id="perfil" form="perfil" require>
                        <option value="">Seleccione</option>
                        <option value="Productor">Productor</option>
                        <option value="Comerciante">Comerciante</option>
                        <option value="Transportador">Transportador</option>
                    </select>
                </div><br>
                <label for="">Usuario</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">account_circle</i></div>
                    <input type="text" name="usuario" id="usuario" required><br><br>
                </div><br>
                <label for="">Contraseña</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">lock</i></div>
                    <input type="password" name="password" id="password" required><br><br>
                </div><br>
                <label for="">Confirmar contraseña</label><br>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">lock</i></div>
                    <input type="password" name="repeat_password" id="repeat_password" required><br><br>
                </div><br>
            </div>
        </div>
        <input type="button" id="register" value="Registrarme">
    </form>
</div>