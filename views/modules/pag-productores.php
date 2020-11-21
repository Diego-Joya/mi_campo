<div class="justify">
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

                <label for="">direccion</label><br>
                <input type="text" name="direccion" id="" placeholder="escriba el nombre de la vereda" require><br><br>

                <label for="">productos que cultiva</label> <br>
                <div class="productos">
                    <table class="tabl" border="1px">
                        <thead>
                            <tr>
                                <th>id producto</th>
                                <th>producto</th>
                                <th>tipo</th>
                                <th> seleccione</th>
                                <th> cantidad en kilos</th>
                            </tr>

                        </thead>
                        <tr>
                            <?php
                $produ = new controller();
                $produ->cultivoscontroller();
                ?>

                        </tr>



                    </table>

                    <input type="button" name="listo" value="listo">

                </div>

                <br>


                <input type="button" name="guardar" value="GUARDAR">
    </form>
</div>