<div class="justify">
    <form id="seguridad" action="" method="POST" onsubmit="validarre">
        <h2>PERFIL DE USUARIO</h2>
        <div class="form_registro">
            <div class="security_user">
                <label for="">Usuario</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">account_circle</i></div>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
                </div>
                <label for="">Contraseña</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">lock</i></div>
                    <input type="password" name="password" id="password" placeholder="Contraseña" required>
                </div>
                <label for="">Confirmar contraseña</label>
                <div class="icon-input">
                    <div class="icon"><i class="material-icons">lock</i></div>
                    <input type="password" name="repeat_password" id="repeat_password" placeholder="Confirmar contraseña" required>
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