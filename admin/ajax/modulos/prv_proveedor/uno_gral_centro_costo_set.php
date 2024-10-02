<?php
$sel = '';
$css_sel = '';
$gral_centro_costo_prv_proveedor_id = '';
if(in_array($gral_centro_costo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'prv_proveedor_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_centro_costo_id', 'valor' => $gral_centro_costo_relacionado->getId())
    );
    $gral_centro_costo_prv_proveedor = GralCentroCostoPrvProveedor::getOxArray($array);
    $gral_centro_costo_prv_proveedor_id = $gral_centro_costo_prv_proveedor->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_GRAL_CENTRO_COSTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_centro_costo_id_<?php echo $gral_centro_costo_relacionado->getId() ?>' name='chk_gral_centro_costo[<?php echo $gral_centro_costo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_centro_costo_relacionado->getId() ?>' relacion_id='<?php echo $gral_centro_costo_prv_proveedor_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_GRAL_CENTRO_COSTO_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_centro_costo_prv_proveedor_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_centro_costo_prv_proveedor/gral_centro_costo_prv_proveedor_alta.php?id=<?php Gral::_echo($gral_centro_costo_prv_proveedor_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_centro_costo_relacionado->getId()) ?>, 'gral_centro_costo', 'prv_proveedor', <?php Gral::_echo($o_padre->getId()) ?>, 'PrvProveedor', 'GralCentroCostoPrvProveedor')" title="Editar GralCentroCostoPrvProveedor"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA')){ ?>	
        <a class='boton' href='gral_centro_costo_alta.php?id=<?php echo $gral_centro_costo_relacionado->getId() ?>&hash=<?php echo $gral_centro_costo_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_centro_costo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_centro_costo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_centro_costo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_centro_costo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_centro_costo_prv_proveedor_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

