<?php
include_once '_autoload.php';
include_once 'init_set_tab3.php';

$sql = "SELECT * FROM tmp_prv_importacion_tab_3 WHERE prv_importacion_id = ".$prv_importacion->getId()." and fila = ".$identificador;

$cons = new Consulta();
$cons->setSQL($sql);
$cons->execute();

include "get_row_uno.php";

include 'set_excel_variables.php';


if(empty($col_descripcion_matriz_val)){
    $texto_default_matriz = $col_descripcion_val;
}else{
    $texto_default_matriz = $col_descripcion_matriz_val;
}

?>
<div class="datos">
    
    <div class="descripcion-matriz">
        <input type="hidden" name="fila_descripcion" id="fila_descripcion" value="<?php echo $row; ?>">

        <div class="par">        
            <div class="label"><?php Lang::_lang('Descripcion de Insumo de Proveedor') ?></div>
            <div class="dato">
                <input type="text" id="descripcion_insumo" name="descripcion_insumo" value="<?php Gral::_echo($col_descripcion_val); ?>" size="50" class="textbox" />
            </div>        
        </div>

        <?php if($col_nuevo_val == 1){ ?>
        <div class="par">        
            <div class="label"><?php Lang::_lang('Descripcion de Matriz') ?></div>
            <div class="dato">
                <input type="text" id="descripcion_matriz" name="descripcion_matriz" value="<?php Gral::_echo($texto_default_matriz); ?>" size="50" class="textbox" />
            </div>        
        </div>
        <?php } ?>

        <div class="botonera">
            <button class="boton" id="aceptar_descripcion"><?php Lang::_lang('Aceptar') ?></button>
            <button class="boton" id="restaurar_descripcion"><?php Lang::_lang('Restaurar') ?></button>
            <button class="boton" id="cerrar_descripcion"><?php Lang::_lang('Cerrar') ?></button>
        </div>

    </div>
    
</div>