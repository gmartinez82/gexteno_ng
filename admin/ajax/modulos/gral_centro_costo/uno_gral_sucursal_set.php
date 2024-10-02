<?php
$sel = '';
$css_sel = '';
$gral_centro_costo_gral_sucursal_id = '';
if(in_array($gral_sucursal_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_centro_costo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_sucursal_id', 'valor' => $gral_sucursal_relacionado->getId())
    );
    $gral_centro_costo_gral_sucursal = GralCentroCostoGralSucursal::getOxArray($array);
    $gral_centro_costo_gral_sucursal_id = $gral_centro_costo_gral_sucursal->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA_RELACION_GRAL_SUCURSAL_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_sucursal_id_<?php echo $gral_sucursal_relacionado->getId() ?>' name='chk_gral_sucursal[<?php echo $gral_sucursal_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_sucursal_relacionado->getId() ?>' relacion_id='<?php echo $gral_centro_costo_gral_sucursal_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA_RELACION_GRAL_SUCURSAL_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_centro_costo_gral_sucursal_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_centro_costo_gral_sucursal/gral_centro_costo_gral_sucursal_alta.php?id=<?php Gral::_echo($gral_centro_costo_gral_sucursal_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_sucursal_relacionado->getId()) ?>, 'gral_sucursal', 'gral_centro_costo', <?php Gral::_echo($o_padre->getId()) ?>, 'GralCentroCosto', 'GralCentroCostoGralSucursal')" title="Editar GralCentroCostoGralSucursal"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA')){ ?>	
        <a class='boton' href='gral_sucursal_alta.php?id=<?php echo $gral_sucursal_relacionado->getId() ?>&hash=<?php echo $gral_sucursal_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_sucursal_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_sucursal_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_sucursal_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_sucursal_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_centro_costo_gral_sucursal_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

