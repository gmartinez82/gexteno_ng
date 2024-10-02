<?php
$sel = '';
$css_sel = '';
$pde_orden_pago_pde_tributo_id = '';
if(in_array($pde_orden_pago_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'pde_tributo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pde_orden_pago_id', 'valor' => $pde_orden_pago_relacionado->getId())
    );
    $pde_orden_pago_pde_tributo = PdeOrdenPagoPdeTributo::getOxArray($array);
    $pde_orden_pago_pde_tributo_id = $pde_orden_pago_pde_tributo->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_ORDEN_PAGO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_orden_pago_id_<?php echo $pde_orden_pago_relacionado->getId() ?>' name='chk_pde_orden_pago[<?php echo $pde_orden_pago_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_orden_pago_relacionado->getId() ?>' relacion_id='<?php echo $pde_orden_pago_pde_tributo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_ORDEN_PAGO_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_orden_pago_pde_tributo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_orden_pago_pde_tributo/pde_orden_pago_pde_tributo_alta.php?id=<?php Gral::_echo($pde_orden_pago_pde_tributo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_orden_pago_relacionado->getId()) ?>, 'pde_orden_pago', 'pde_tributo', <?php Gral::_echo($o_padre->getId()) ?>, 'PdeTributo', 'PdeOrdenPagoPdeTributo')" title="Editar PdeOrdenPagoPdeTributo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ALTA')){ ?>	
        <a class='boton' href='pde_orden_pago_alta.php?id=<?php echo $pde_orden_pago_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_orden_pago_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($pde_orden_pago_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($pde_orden_pago_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $pde_orden_pago_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($pde_orden_pago_pde_tributo_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Imp Imponible') ?>:</label> <label class='dato'><?php echo $pde_orden_pago_pde_tributo->getImporteImponible() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Imp Tributo') ?>:</label> <label class='dato'><?php echo $pde_orden_pago_pde_tributo->getImporteTributo() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Porcentual') ?>:</label> <label class='dato'><?php echo $pde_orden_pago_pde_tributo->getAlicuotaPorcentual() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Decimal') ?>:</label> <label class='dato'><?php echo $pde_orden_pago_pde_tributo->getAlicuotaDecimal() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

