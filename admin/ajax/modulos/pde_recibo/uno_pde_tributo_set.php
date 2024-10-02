<?php
$sel = '';
$css_sel = '';
$pde_recibo_pde_tributo_id = '';
if(in_array($pde_tributo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'pde_recibo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pde_tributo_id', 'valor' => $pde_tributo_relacionado->getId())
    );
    $pde_recibo_pde_tributo = PdeReciboPdeTributo::getOxArray($array);
    $pde_recibo_pde_tributo_id = $pde_recibo_pde_tributo->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_RELACION_PDE_TRIBUTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_tributo_id_<?php echo $pde_tributo_relacionado->getId() ?>' name='chk_pde_tributo[<?php echo $pde_tributo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_tributo_relacionado->getId() ?>' relacion_id='<?php echo $pde_recibo_pde_tributo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_RELACION_PDE_TRIBUTO_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_recibo_pde_tributo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_recibo_pde_tributo/pde_recibo_pde_tributo_alta.php?id=<?php Gral::_echo($pde_recibo_pde_tributo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_tributo_relacionado->getId()) ?>, 'pde_tributo', 'pde_recibo', <?php Gral::_echo($o_padre->getId()) ?>, 'PdeRecibo', 'PdeReciboPdeTributo')" title="Editar PdeReciboPdeTributo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA')){ ?>	
        <a class='boton' href='pde_tributo_alta.php?id=<?php echo $pde_tributo_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_tributo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($pde_tributo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($pde_tributo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $pde_tributo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($pde_recibo_pde_tributo_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Imp Imponible') ?>:</label> <label class='dato'><?php echo $pde_recibo_pde_tributo->getImporteImponible() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Imp Tributo') ?>:</label> <label class='dato'><?php echo $pde_recibo_pde_tributo->getImporteTributo() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Porcentual') ?>:</label> <label class='dato'><?php echo $pde_recibo_pde_tributo->getAlicuotaPorcentual() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Alicuota Decimal') ?>:</label> <label class='dato'><?php echo $pde_recibo_pde_tributo->getAlicuotaDecimal() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

