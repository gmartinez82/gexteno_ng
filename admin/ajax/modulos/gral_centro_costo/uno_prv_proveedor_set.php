<?php
$sel = '';
$css_sel = '';
$gral_centro_costo_prv_proveedor_id = '';
if(in_array($prv_proveedor_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_centro_costo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'prv_proveedor_id', 'valor' => $prv_proveedor_relacionado->getId())
    );
    $gral_centro_costo_prv_proveedor = GralCentroCostoPrvProveedor::getOxArray($array);
    $gral_centro_costo_prv_proveedor_id = $gral_centro_costo_prv_proveedor->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA_RELACION_PRV_PROVEEDOR_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_prv_proveedor_id_<?php echo $prv_proveedor_relacionado->getId() ?>' name='chk_prv_proveedor[<?php echo $prv_proveedor_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $prv_proveedor_relacionado->getId() ?>' relacion_id='<?php echo $gral_centro_costo_prv_proveedor_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA_RELACION_PRV_PROVEEDOR_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_centro_costo_prv_proveedor_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_centro_costo_prv_proveedor/gral_centro_costo_prv_proveedor_alta.php?id=<?php Gral::_echo($gral_centro_costo_prv_proveedor_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($prv_proveedor_relacionado->getId()) ?>, 'prv_proveedor', 'gral_centro_costo', <?php Gral::_echo($o_padre->getId()) ?>, 'GralCentroCosto', 'GralCentroCostoPrvProveedor')" title="Editar GralCentroCostoPrvProveedor"><?php Lang::_lang('Editar') ?></div>
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
        	
    <?php if($gral_centro_costo_prv_proveedor_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

