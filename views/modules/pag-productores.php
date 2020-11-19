<h2>PERFIL DE USUARIO</h2>
            <form class="actualizar" action="">
                <label for="">nombre</label><br>
                <input type="text" name="nombre" id="" placeholder="" require><br><br>
                <label for="">apellido</label><br>
                <input type="text" name="usuario" id="" placeholder="" require><br><br>
                <label for="">Contraseña</label><br>
                <input type="password" name="password" id="" placeholder="" require><br><br>
                <label for="">nombre de la finca</label><br>
                <input type="text" name="finca" id="" placeholder="" require><br><br>
                <div class="puesto"><label for="">clima</label> <br>
                    <select class="s" name="" id="">
                        <option value="">seleccione</option>
                        <option value="">frio</option>
                        <option value="">temple</option>
                        <option value="">calinete</option>
                    </select> <br>
                </div>
                <label for="">departamento</label><br>
                <input type="text" name="departamento" id="" placeholder="" require><br><br>
                <label for="">municipio</label><br>
                <input type="text" name="municipio" id="" placeholder="" require><br><br>



                <label for="">productos que cultiva</label> <br>
                <div class="productos">
                    <table border="1px">
                        <thead>
                            <tr>
                                <th>id producto</th>
                                <th>producto</th>
                                <th>tipo</th>
                                <th> seleccione</th>
                                <th> cantidad</th>
                            </tr>

                        </thead>
                        <tr>
                            <?php
$produ= new control();
$produ-> cultivoscontroller();
?>

                        </tr>



                    </table>
                    <input type="button" name="listo" value="listo">

                </div>

                <br>

                <input type="button" name="guardar" value="GUARDAR">
            </form>