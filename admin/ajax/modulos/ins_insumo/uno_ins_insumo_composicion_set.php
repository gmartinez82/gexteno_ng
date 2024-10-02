<?php
$sel = '';
$css_sel = '';
$ins_insumo_composicion_id = '';
if(in_array($ins_insumo_composicion_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ins_insumo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_insumo_composicion', 'valor' => $ins_insumo_composicion_relacionado->getId())
    );
    $ins_insumo_composicion = InsInsumoComposicion::getOxArray($array);
    $ins_insumo_composicion_id = $ins_insumo_composicion->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_INSUMO_COMPOSICION_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_insumo_composicion_id_<?php echo $ins_insumo_composicion_relacionado->getId() ?>' name='chk_ins_insumo_composicion[<?php echo $ins_insumo_composicion_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_insumo_composicion_relacionado->getId() ?>' relacion_id='<?php echo $ins_insumo_composicion_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_INSUMO_COMPOSICION_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_insumo_composicion_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_composicion/ins_insumo_composicion_alta.php?id=<?php Gral::_echo($ins_insumo_composicion_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_insumo_composicion_relacionado->getId()) ?>, 'ins_insumo_composicion', 'ins_insumo', <?php Gral::_echo($o_padre->getId()) ?>, 'InsInsumo', 'InsInsumoComposicion')" title="Editar InsInsumoComposicion"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')){ ?>	
        <a class='boton' href='ins_insumo_alta.php?id=<?php echo $ins_insumo_composicion_relacionado->getId() ?>&hash=<?php echo $ins_insumo_composicion_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_insumo_composicion_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $ins_insumo_composicion_relacionado->getPathImagenPrincipal() ?>" rel="imagen-ins_insumo_composicion-<?php echo $ins_insumo_composicion_relacionado->getId() ?>">
            <img src="<?php echo $ins_insumo_composicion_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del InsInsumo" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_insumo_composicion_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ins_insumo_composicion_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ins_insumo_composicion_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ins_insumo_composicion_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Cantidad') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_insumo_composicion->getCantidad()) ?></label>
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_insumo_composicion->getObservacion()) ?></label>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

