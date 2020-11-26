<div class="justify">
    <h2>PERFIL DE USUARIO</h2>
    <form class="actualizar" action="" method="POST" onsubmit="validarre">
        <label for="">Nombre de la finca</label>
        <input type="text" name="finca" id="" placeholder="escriba el nombre de su finca" require>
        <div class="puesto">
            <label for="">Clima</label>
            <select class="s" name="" id="">
                <option value="">Seleccione</option>
                <option value="">frio</option>
                <option value="">temple</option>
                <option value="">calinete</option>
            </select>
        </div>
        <div class="puesto"><label for="">Departamento </label>
            <select class="s" name="" id="">

                <?php
                $produ = new controller();
                $produ->departamentoscontroller();
                ?>

            </select> 
        </div>
        <div class="puesto"><label for="">Municipio </label>
            <select class="s" name="" id="">

                <?php
                $produ = new controller();
                $produ->municipioscontroller();
                ?>

            </select>
        </div>
        <label for="">productos que cultiva</label>
        
        <div class="button_register">
            <input type="button" name="guardar" value="GUARDAR">
        </div>
    </form>
</div>