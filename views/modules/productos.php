<h2>PRODUCTOS</h2>
<div class="form_productos">
    <div class="productos">
        <table class="tabl" border="1" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>producto</th>
                    <th>cantidad (KG)</th>
                </tr>
            </thead>
            <tr>
                <?php
                // $produ = new controller();
                // $produ->cultivoscontroller();
                ?>

            </tr>
        </table>
    </div>
    <div class="register_productos">
        <form id="prodcutos" action="" method="POST" onsubmit="validarre">
            <label for="">Producto</label>
            <div class="icon-input">
                <div class="icon"><i class="material-icons">list</i></div>
                <select name="perfil" id="producto" form="producto" require>
                    <option value="">Seleccione</option>
                    <?php
                    $produ = new controller();
                    $produ->cultivoscontroller();
                    ?>
                </select>
            </div>
            <label for="">Cantidad</label>
            <div class="icon-input">
                <div class="icon"><i class="material-icons">clear_all</i></div>
                <input type="number" name="usuario" id="usuario" placeholder="Cantidad en Kg" required>
            </div>
            <div class="button_register">
                <input type="button" id="register" value="Agregar">
            </div>
        </form>
    </div>
</div>