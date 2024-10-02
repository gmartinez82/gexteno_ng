<?php
$sel = '';
$css_sel = '';
$vta_recibo_vta_tributo_id = '';
if(in_array($vta_tributo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'vta_recibo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_tributo_id', 'valor' => $vta_tributo_relacionado->getId())
    );
    $vta_recibo_vta_tributo = VtaReciboVtaTributo::getOxArray($array);
    $vta_recibo_vta_tributo_id = $vta_recibo_vta_tributo->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_RELACION_VTA_TRIBUTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_tributo_id_<?php echo $vta_tributo_relacionado->getId() ?>' name='chk_vta_tributo[<?php echo $vta_tributo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_tributo_relacionado->getId() ?>' relacion_id='<?php echo $vta_recibo_vta_tributo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_RELACION_VTA_TRIBUTO_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_recibo_vta_tributo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_recibo_vta_tributo/vta_recibo_vta_tributo_alta.php?id=<?php Gral::_echo($vta_recibo_vta_tributo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_tributo_relacionado->getId()) ?>, 'vta_tributo', 'vta_recibo', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaRecibo', 'VtaReciboVtaTributo')" title="Editar VtaReciboVtaTributo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA')){ ?>	
        <a class='boton' href='vta_tributo_alta.php?id=<?php echo $vta_tributo_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_tributo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_tributo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_tributo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_tributo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_recibo_vta_tributo_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Imp Imponible') ?>:</label> <label class='dato'><?php echo $vta_recibo_vta_tributo->getImporteImponible() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Imp Tributo') ?>:</label> <label class='dato'><?php echo $vta_recibo_vta_tributo->getImporteTributo() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Porcentual') ?>:</label> <label class='dato'><?php echo $vta_recibo_vta_tributo->getAlicuotaPorcentual() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Decimal') ?>:</label> <label class='dato'><?php echo $vta_recibo_vta_tributo->getAlicuotaDecimal() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

