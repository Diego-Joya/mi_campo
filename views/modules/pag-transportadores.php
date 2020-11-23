<h2>ACTUALICES SUS DATOS COMO TRANSPORTADOR</h2>
            <form class="actualizar" action="">
                <label for="">nombre del transportador</label><br>
                <input type="text" name="nombre" id="" placeholder="escriba su nombre " require><br><br>
                <label for="">apellido del transportador</label><br>
                <input type="text" name="usuario" id="" placeholder="escriba su apellido" require><br><br>
                <label for="">Contraseña</label><br>
                <input type="password" name="password" id="" placeholder="escriba la contraseña con la que se registro" require><br><br>
                <label for="">telefono de contacto</label><br>
                <input type="number" name="telefono" placeholder="escriba su numero de celular" maxlength="10"requiere><br><br>
               <div class="puesto"><label for="">capacidad del <br> vehiculo </label> <br>
                <select class="s" name="" id="">
                    <option value="">seleccione</option>
                    <option value="">3 toneladas</option>
                    <option value="">4 toneladas</option>
                    <option value="">5 toneladas</option>
                    <option value="">6 toneladas</option>
                    <option value="">7 toneladas</option>
                    <option value="">8 toneladas</option>
                    <option value="">mas de 10 toneladas</option>
                </select> <br>
            </div>
            <label for="">placas del vehiculo</label><br>
            <input type="text" name="placas" id="" placeholder="escriba las placas de su vehiculo" require><br><br>
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
                <input type="button" name="guardar" value="GUARDAR">
            </form>