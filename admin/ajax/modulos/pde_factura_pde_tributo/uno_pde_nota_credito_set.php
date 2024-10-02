<?php
$sel = '';
$css_sel = '';
$pde_nota_credito_pde_factura_pde_tributo_id = '';
if(in_array($pde_nota_credito_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'pde_factura_pde_tributo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pde_nota_credito_id', 'valor' => $pde_nota_credito_relacionado->getId())
    );
    $pde_nota_credito_pde_factura_pde_tributo = PdeNotaCreditoPdeFacturaPdeTributo::getOxArray($array);
    $pde_nota_credito_pde_factura_pde_tributo_id = $pde_nota_credito_pde_factura_pde_tributo->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_ALTA_RELACION_PDE_NOTA_CREDITO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_nota_credito_id_<?php echo $pde_nota_credito_relacionado->getId() ?>' name='chk_pde_nota_credito[<?php echo $pde_nota_credito_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_nota_credito_relacionado->getId() ?>' relacion_id='<?php echo $pde_nota_credito_pde_factura_pde_tributo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_ALTA_RELACION_PDE_NOTA_CREDITO_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_nota_credito_pde_factura_pde_tributo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_nota_credito_pde_factura_pde_tributo/pde_nota_credito_pde_factura_pde_tributo_alta.php?id=<?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_nota_credito_relacionado->getId()) ?>, 'pde_nota_credito', 'pde_factura_pde_tributo', <?php Gral::_echo($o_padre->getId()) ?>, 'PdeFacturaPdeTributo', 'PdeNotaCreditoPdeFacturaPdeTributo')" title="Editar PdeNotaCreditoPdeFacturaPdeTributo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA')){ ?>	
        <a class='boton' href='pde_nota_credito_alta.php?id=<?php echo $pde_nota_credito_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_nota_credito_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $pde_nota_credito_relacionado->getPathImagenPrincipal() ?>" rel="imagen-pde_nota_credito-<?php echo $pde_nota_credito_relacionado->getId() ?>">
            <img src="<?php echo $pde_nota_credito_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del PdeNotaCredito" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($pde_nota_credito_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($pde_nota_credito_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $pde_nota_credito_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($pde_nota_credito_pde_factura_pde_tributo_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Imp Imponible') ?>:</label> <label class='dato'><?php echo $pde_nota_credito_pde_factura_pde_tributo->getImporteImponible() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Imp Tributo') ?>:</label> <label class='dato'><?php echo $pde_nota_credito_pde_factura_pde_tributo->getImporteTributo() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Porcentual') ?>:</label> <label class='dato'><?php echo $pde_nota_credito_pde_factura_pde_tributo->getAlicuotaPorcentual() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Decimal') ?>:</label> <label class='dato'><?php echo $pde_nota_credito_pde_factura_pde_tributo->getAlicuotaDecimal() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

