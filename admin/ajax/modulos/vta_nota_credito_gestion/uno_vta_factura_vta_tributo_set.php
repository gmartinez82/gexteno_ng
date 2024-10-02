<?php
$sel = '';
$css_sel = '';
$vta_nota_credito_vta_factura_vta_tributo_id = '';
if(in_array($vta_factura_vta_tributo->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'vta_nota_credito_id', 'valor' => $o_padre->getId()),
		array('campo' => 'vta_factura_vta_tributo_id', 'valor' => $vta_factura_vta_tributo->getId())
	);
	$vta_nota_credito_vta_factura_vta_tributo = new VtaNotaCreditoVtaFacturaVtaTributo();
	$vta_nota_credito_vta_factura_vta_tributo = VtaNotaCreditoVtaFacturaVtaTributo::getOxArray($arr_cri);
	$vta_nota_credito_vta_factura_vta_tributo_id = $vta_nota_credito_vta_factura_vta_tributo->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $vta_factura_vta_tributo->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_VTA_TRIBUTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_factura_vta_tributo_id_<?php echo $vta_factura_vta_tributo->getId() ?>' name='chk_vta_factura_vta_tributo[<?php echo $vta_factura_vta_tributo->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_factura_vta_tributo->getId() ?>' relacion_id='<?php echo $vta_nota_credito_vta_factura_vta_tributo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_VTA_TRIBUTO_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_nota_credito_vta_factura_vta_tributo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_nota_credito_vta_factura_vta_tributo/vta_nota_credito_vta_factura_vta_tributo_alta.php?id=<?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_factura_vta_tributo->getId()) ?>, 'vta_factura_vta_tributo', 'vta_nota_credito', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaNotaCredito', 'VtaNotaCreditoVtaFacturaVtaTributo')" title="Editar VtaNotaCreditoVtaFacturaVtaTributo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_TRIBUTO_ALTA')){ ?>	
        <a class='boton' href='vta_factura_vta_tributo_alta.php?id=<?php echo $vta_factura_vta_tributo->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_factura_vta_tributo->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion' for='chk_vta_factura_vta_tributo_id_<?php echo $vta_factura_vta_tributo->getId() ?>'><strong><?php Gral::_echo($vta_factura_vta_tributo->getDescripcion()) ?></strong></label>

    <?php if($vta_nota_credito_vta_factura_vta_tributo_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Imp Imponible') ?>:</label> <label class='dato'><?php echo $vta_nota_credito_vta_factura_vta_tributo->getImporteImponible() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Imp Tributo') ?>:</label> <label class='dato'><?php echo $vta_nota_credito_vta_factura_vta_tributo->getImporteTributo() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Porcentual') ?>:</label> <label class='dato'><?php echo $vta_nota_credito_vta_factura_vta_tributo->getAlicuotaPorcentual() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Decimal') ?>:</label> <label class='dato'><?php echo $vta_nota_credito_vta_factura_vta_tributo->getAlicuotaDecimal() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

