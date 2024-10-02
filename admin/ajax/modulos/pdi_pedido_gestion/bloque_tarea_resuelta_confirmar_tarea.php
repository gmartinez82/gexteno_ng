<?php if($tal_tarea_base){ ?>

    <div class="par">
        <div class="label">
            <?php Lang::_lang('Tarea') ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($tal_tarea_base->getCodigo()) ?>
            <input type="hidden" id="hdn_tarea_id" name="hdn_tarea_id" value="<?php echo $tal_tarea_base->getId() ?>" size="2">
        </div>
    </div>

    <div class="par">
    	<div class="label"><?php Lang::_lang('Accion Realizada') ?></div>
    	<div class="dato">
			<?php Html::html_dib_select(1, 'pdi_pedido_entrega_cmb_tal_tarea_accion_id', $tal_tarea_base->getTalTareaAccionsCmbXTalTareaBaseTalTareaAccion(), $pdi_pedido_entrega_cmb_tal_tarea_accion_id, 'textbox') ?>
        </div>
    	<div class="error"><?php Gral::_echo($pdi_pedido_entrega_cmb_tal_tarea_accion_id_error) ?></div>
    </div>

    <div class="botonera">
        <input type="button" id="btn_registrar" name="btn_registrar" class="boton" value="<?php Lang::_lang('Generar Tarea Resuelta') ?>"></input>
    </div>
<?php } ?>
