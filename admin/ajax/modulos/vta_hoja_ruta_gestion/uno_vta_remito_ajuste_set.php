<?php
$sel = '';
$css_sel = '';
$vta_hoja_ruta_vta_remito_ajuste_id = '';
if(in_array($vta_remito_ajuste_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'vta_hoja_ruta_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_remito_ajuste_id', 'valor' => $vta_remito_ajuste_relacionado->getId())
    );
    $vta_hoja_ruta_vta_remito_ajuste = VtaHojaRutaVtaRemitoAjuste::getOxArray($array);
    $vta_hoja_ruta_vta_remito_ajuste_id = $vta_hoja_ruta_vta_remito_ajuste->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA_RELACION_VTA_REMITO_AJUSTE_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_remito_ajuste_id_<?php echo $vta_remito_ajuste_relacionado->getId() ?>' name='chk_vta_remito_ajuste[<?php echo $vta_remito_ajuste_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_remito_ajuste_relacionado->getId() ?>' relacion_id='<?php echo $vta_hoja_ruta_vta_remito_ajuste_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA_RELACION_VTA_REMITO_AJUSTE_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_hoja_ruta_vta_remito_ajuste_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_hoja_ruta_vta_remito_ajuste/vta_hoja_ruta_vta_remito_ajuste_alta.php?id=<?php Gral::_echo($vta_hoja_ruta_vta_remito_ajuste_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_remito_ajuste_relacionado->getId()) ?>, 'vta_remito_ajuste', 'vta_hoja_ruta', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaHojaRuta', 'VtaHojaRutaVtaRemitoAjuste')" title="Editar VtaHojaRutaVtaRemitoAjuste"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_ALTA')){ ?>	
        <a class='boton' href='vta_remito_ajuste_alta.php?id=<?php echo $vta_remito_ajuste_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_remito_ajuste_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_remito_ajuste_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_remito_ajuste_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_remito_ajuste_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_hoja_ruta_vta_remito_ajuste_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

