<div class="justify">
    <form id="seguridad" action="" method="POST" onsubmit="validarre">
        <h2>PERFIL DE USUARIO</h2>
        <div class="form_registro">
            <div class="information_user">
                <label for="">Nombres</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">person</i></div>
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres" required>
                </div>
                <label for="">Apellidos</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">person</i></div>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>
                </div>
                <label for="">Tipo indentificación</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">list</i></div>
                    <select name="tipo" id="tipo" form="tipo" required>
                        <option value="">Seleccione</option>
                        <option value="Cedula">Cedula</option>
                        <option value="Nit">Nit</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div>
                <label for="">N° Documento</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">picture_in_picture</i></div>
                    <input type="number" name="documento" id="documento" placeholder="No Documento" required>
                </div>
                <label for="">Genero</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">list</i></div>
                    <select name="genero" id="genero" form="genero" required>
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
                <label for="">Celular</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">phone_iphone</i></div>
                    <input type="number" name="celular" id="celular" placeholder="Celular">
                </div>
                <label for="">Email</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">mail</i></div>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
        </div>
        <div class="button_scurity">
            <input type="button" id="register" value="Registrarme">
        </div>
    </form>
</div>
<script>
    // document.addEventListener("DOMContentLoaded", function(event) {
    //     editUser();
    // });
</script>