<?php
$sel = '';
$css_sel = '';
$ins_lista_precio_id = '';
if(in_array($ins_tipo_lista_precio_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ins_insumo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_tipo_lista_precio_id', 'valor' => $ins_tipo_lista_precio_relacionado->getId())
    );
    $ins_lista_precio = InsListaPrecio::getOxArray($array);
    $ins_lista_precio_id = $ins_lista_precio->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_TIPO_LISTA_PRECIO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_tipo_lista_precio_id_<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>' name='chk_ins_tipo_lista_precio[<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>' relacion_id='<?php echo $ins_lista_precio_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_TIPO_LISTA_PRECIO_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_lista_precio_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_lista_precio/ins_lista_precio_alta.php?id=<?php Gral::_echo($ins_lista_precio_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_tipo_lista_precio_relacionado->getId()) ?>, 'ins_tipo_lista_precio', 'ins_insumo', <?php Gral::_echo($o_padre->getId()) ?>, 'InsInsumo', 'InsListaPrecio')" title="Editar InsListaPrecio"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA')){ ?>	
        <a class='boton' href='ins_tipo_lista_precio_alta.php?id=<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>&hash=<?php echo $ins_tipo_lista_precio_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_tipo_lista_precio_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_tipo_lista_precio_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ins_tipo_lista_precio_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ins_tipo_lista_precio_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ins_lista_precio_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Imp Calc') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_lista_precio->getImporteCalculado()) ?></label>
        
		<label class='light'><?php Lang::_lang('Imp Manual') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_lista_precio->getImporteManual()) ?></label>
        
		<label class='light'><?php Lang::_lang('Porc Increm') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_lista_precio->getPorcentajeIncremento()) ?></label>
        
		<label class='light'><?php Lang::_lang('Porc Desc') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_lista_precio->getPorcentajeDescuento()) ?></label>
        
		<label class='light'><?php Lang::_lang('Porc Increm Fijo') ?>:</label> <label class='dato'><?php Gral::_echoConBr(GralSiNo::getOxId($ins_lista_precio->getPorcentajeDescuentoFijo())->getDescripcion()) ?></label>
        
		<label class='light'><?php Lang::_lang('Cantidad Minima') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_lista_precio->getCantidadMinimaVenta()) ?></label>
        
		<label class='light'><?php Lang::_lang('Habilitado') ?>:</label> <label class='dato'><?php Gral::_echoConBr(GralSiNo::getOxId($ins_lista_precio->getHabilitado())->getDescripcion()) ?></label>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

