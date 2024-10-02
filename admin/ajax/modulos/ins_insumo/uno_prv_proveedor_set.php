<?php
$sel = '';
$css_sel = '';
$ins_insumo_prv_proveedor_id = '';
if(in_array($prv_proveedor_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ins_insumo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'prv_proveedor_id', 'valor' => $prv_proveedor_relacionado->getId())
    );
    $ins_insumo_prv_proveedor = InsInsumoPrvProveedor::getOxArray($array);
    $ins_insumo_prv_proveedor_id = $ins_insumo_prv_proveedor->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_PRV_PROVEEDOR_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_prv_proveedor_id_<?php echo $prv_proveedor_relacionado->getId() ?>' name='chk_prv_proveedor[<?php echo $prv_proveedor_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $prv_proveedor_relacionado->getId() ?>' relacion_id='<?php echo $ins_insumo_prv_proveedor_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_PRV_PROVEEDOR_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_insumo_prv_proveedor_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_prv_proveedor/ins_insumo_prv_proveedor_alta.php?id=<?php Gral::_echo($ins_insumo_prv_proveedor_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($prv_proveedor_relacionado->getId()) ?>, 'prv_proveedor', 'ins_insumo', <?php Gral::_echo($o_padre->getId()) ?>, 'InsInsumo', 'InsInsumoPrvProveedor')" title="Editar InsInsumoPrvProveedor"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA')){ ?>	
        <a class='boton' href='prv_proveedor_alta.php?id=<?php echo $prv_proveedor_relacionado->getId() ?>&hash=<?php echo $prv_proveedor_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($prv_proveedor_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($prv_proveedor_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($prv_proveedor_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $prv_proveedor_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ins_insumo_prv_proveedor_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Cod en Marca') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_insumo_prv_proveedor->getCodigo()) ?></label>
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echoConBr($ins_insumo_prv_proveedor->getObservacion()) ?></label>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

