<?php
$sel = '';
$css_sel = '';
$vta_factura_vta_nota_credito_id = '';
if(in_array($vta_factura->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'vta_nota_credito_id', 'valor' => $o_padre->getId()),
		array('campo' => 'vta_factura_id', 'valor' => $vta_factura->getId())
	);
	$vta_factura_vta_nota_credito = new VtaFacturaVtaNotaCredito();
	$vta_factura_vta_nota_credito = VtaFacturaVtaNotaCredito::getOxArray($arr_cri);
	$vta_factura_vta_nota_credito_id = $vta_factura_vta_nota_credito->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $vta_factura->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_factura_id_<?php echo $vta_factura->getId() ?>' name='chk_vta_factura[<?php echo $vta_factura->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_factura->getId() ?>' relacion_id='<?php echo $vta_factura_vta_nota_credito_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_factura_vta_nota_credito_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_factura_vta_nota_credito/vta_factura_vta_nota_credito_alta.php?id=<?php Gral::_echo($vta_factura_vta_nota_credito_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_factura->getId()) ?>, 'vta_factura', 'vta_nota_credito', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaNotaCredito', 'VtaFacturaVtaNotaCredito')" title="Editar VtaFacturaVtaNotaCredito"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA')){ ?>	
        <a class='boton' href='vta_factura_alta.php?id=<?php echo $vta_factura->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_factura->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion' for='chk_vta_factura_id_<?php echo $vta_factura->getId() ?>'><strong><?php Gral::_echo($vta_factura->getDescripcion()) ?></strong></label>

    <?php if($vta_factura_vta_nota_credito_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

