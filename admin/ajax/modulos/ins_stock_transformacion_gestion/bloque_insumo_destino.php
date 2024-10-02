<?php
include "_autoload.php";

$nro = Gral::getVars(2, 'nro', 0);
?>
    <div class="par">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_destino_ins_categoria_id_'.$nro, Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(),'...'), $cmb_destino_ins_categoria_id, 'textbox categoria', '', '', 'cmb_destino_ins_categoria_id['.$nro.']') ?>

            <div class="error label-error" id="cmb_destino_ins_categoria_id_<?php echo $nro ?>_error"></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Lang::_lang('Insumo') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_destino_ins_insumo_id_'.$nro, Gral::getCmbFiltro(InsInsumo::getInsInsumosTransformablesDestinoCmb(),'...'), $cmb_destino_ins_insumo_id, 'textbox insumo', '', '', 'cmb_destino_ins_insumo_id['.$nro.']') ?>

            <div class="error label-error" id="cmb_destino_ins_insumo_id_<?php echo $nro ?>_error"></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Lang::_lang('Cantidad') ?></div>
        <div class="dato">
            <input name='txt_destino_cantidad[<?php echo $nro ?>]' type='text' class='textbox spinner' id='txt_destino_cantidad_<?php echo $nro ?>' value='1' size='5' min="0" />    
            <div class="error label-error" id="txt_destino_cantidad_<?php echo $nro ?>_error"></div>
            
            <div class="comentario">Determine aquí en cuantas unidades destino se dividirá CADA unidad origen elegida.</div>
        </div>
    </div>
    
    <div class="acciones">
    	<div class="accion eliminar">[x] Eliminar</div>
    </div>
