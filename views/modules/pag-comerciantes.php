<div class="justify">
    <h2>ACTUALICES SUS DATOS COMO COMERCIANTE</h2>
    <form class="actualizar" action="">
        <label for="">nombre</label><br>
        <input type="text" name="nombre" id="" placeholder="escriba su nombre" require><br><br>
        <label for="">apellido </label><br>
        <input type="text" name="usuario" id="" placeholder="escriba su apellido" require><br><br>
        <label for="">Contraseña</label><br>
        <input type="password" name="password" id="" placeholder="clave con la que se registro" require><br><br>
        <label for="">telefono de contacto</label><br>
        <input type="number" name="telefono" placeholder="escriba su numero de celular" maxlength="10" requiere><br><br>
        <label for="">Nombre del negocio</label><br>
        <input type="text" name="nombre" id="" placeholder="escriba aca el nombre de su negocio" require><br><br>
        <div class="puesto"><label for="">Departamento </label> <br>
            <select class="s" name="" id="">

                <?php
                        $produ = new controller();
                        $produ->departamentoscontroller();
                        ?>

            </select> <br>
        </div>
        <div class="puesto"><label for="">Municipio </label> <br>
            <select class="s" name="" id="">

                <?php
                        $produ = new controller();
                        $produ->municipioscontroller();
                        ?>

            </select> <br>
        </div>
        <label for="">Direccion del negocio</label><br>
        <input type="text" name="nombre" id="" placeholder="escriba aca la direccion de su negocio" require><br><br>

        <input type="button" name="guardar" value="GUARDAR">
    </form>
</div>