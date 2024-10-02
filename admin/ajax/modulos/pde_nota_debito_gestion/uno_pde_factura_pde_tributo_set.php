<?php
$sel = '';
$css_sel = '';
$pde_nota_debito_pde_factura_pde_tributo_id = '';
if(in_array($pde_factura_pde_tributo->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'pde_nota_debito_id', 'valor' => $o_padre->getId()),
		array('campo' => 'pde_factura_pde_tributo_id', 'valor' => $pde_factura_pde_tributo->getId())
	);
	$pde_nota_debito_pde_factura_pde_tributo = new PdeNotaDebitoPdeFacturaPdeTributo();
	$pde_nota_debito_pde_factura_pde_tributo = PdeNotaDebitoPdeFacturaPdeTributo::getOxArray($arr_cri);
	$pde_nota_debito_pde_factura_pde_tributo_id = $pde_nota_debito_pde_factura_pde_tributo->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $pde_factura_pde_tributo->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_VTA_FACTURA_VTA_TRIBUTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_factura_pde_tributo_id_<?php echo $pde_factura_pde_tributo->getId() ?>' name='chk_pde_factura_pde_tributo[<?php echo $pde_factura_pde_tributo->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_factura_pde_tributo->getId() ?>' relacion_id='<?php echo $pde_nota_debito_pde_factura_pde_tributo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_VTA_FACTURA_VTA_TRIBUTO_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_nota_debito_pde_factura_pde_tributo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_nota_debito_pde_factura_pde_tributo/pde_nota_debito_pde_factura_pde_tributo_alta.php?id=<?php Gral::_echo($pde_nota_debito_pde_factura_pde_tributo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_factura_pde_tributo->getId()) ?>, 'pde_factura_pde_tributo', 'pde_nota_debito', <?php Gral::_echo($o_padre->getId()) ?>, 'PdeNotaDebito', 'PdeNotaDebitoPdeFacturaPdeTributo')" title="Editar PdeNotaDebitoPdeFacturaPdeTributo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_TRIBUTO_ALTA')){ ?>	
        <a class='boton' href='pde_factura_pde_tributo_alta.php?id=<?php echo $pde_factura_pde_tributo->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_factura_pde_tributo->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion' for='chk_pde_factura_pde_tributo_id_<?php echo $pde_factura_pde_tributo->getId() ?>'><strong><?php Gral::_echo($pde_factura_pde_tributo->getDescripcion()) ?></strong></label>

    <?php if($pde_nota_debito_pde_factura_pde_tributo_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Imp Imponible') ?>:</label> <label class='dato'><?php echo $pde_nota_debito_pde_factura_pde_tributo->getImporteImponible() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Imp Tributo') ?>:</label> <label class='dato'><?php echo $pde_nota_debito_pde_factura_pde_tributo->getImporteTributo() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Porcentual') ?>:</label> <label class='dato'><?php echo $pde_nota_debito_pde_factura_pde_tributo->getAlicuotaPorcentual() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Decimal') ?>:</label> <label class='dato'><?php echo $pde_nota_debito_pde_factura_pde_tributo->getAlicuotaDecimal() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

