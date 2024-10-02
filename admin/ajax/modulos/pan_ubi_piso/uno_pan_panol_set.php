<?php
$sel = '';
$css_sel = '';
$ins_insumo_pan_panol_id = '';
if(in_array($pan_panol_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'pan_ubi_piso_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pan_panol_id', 'valor' => $pan_panol_relacionado->getId())
    );
    $ins_insumo_pan_panol = InsInsumoPanPanol::getOxArray($array);
    $ins_insumo_pan_panol_id = $ins_insumo_pan_panol->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $pan_panol_relacionado->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('PAN_UBI_PISO_ALTA_RELACION_PAN_PANOL_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pan_panol_id_<?php echo $pan_panol_relacionado->getId() ?>' name='chk_pan_panol[<?php echo $pan_panol_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pan_panol_relacionado->getId() ?>' relacion_id='<?php echo $ins_insumo_pan_panol_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PAN_UBI_PISO_ALTA_RELACION_PAN_PANOL_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_insumo_pan_panol_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_pan_panol/ins_insumo_pan_panol_alta.php?id=<?php Gral::_echo($ins_insumo_pan_panol_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pan_panol_relacionado->getId()) ?>, 'pan_panol', 'pan_ubi_piso', <?php Gral::_echo($o_padre->getId()) ?>, 'PanUbiPiso', 'InsInsumoPanPanol')" title="Editar InsInsumoPanPanol"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA')){ ?>	
        <a class='boton' href='pan_panol_alta.php?id=<?php echo $pan_panol_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pan_panol_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($pan_panol_relacionado->getDescripcion()) ?></label>

    <?php if($ins_insumo_pan_panol_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('PanUbiPiso') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPanUbiPiso()->getDescripcion() ?></label><br />
        
		<label class='light'><?php Lang::_lang('PanUbiPasillo') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPanUbiPasillo()->getDescripcion() ?></label><br />
        
		<label class='light'><?php Lang::_lang('PanUbiEstante') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPanUbiEstante()->getDescripcion() ?></label><br />
        
		<label class='light'><?php Lang::_lang('PanUbiAltura') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPanUbiAltura()->getDescripcion() ?></label><br />
        
		<label class='light'><?php Lang::_lang('PanUbiCasillero') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPanUbiCasillero()->getDescripcion() ?></label><br />
        
		<label class='light'><?php Lang::_lang('PanUbiCelda') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPanUbiCelda()->getDescripcion() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Punto de Minimo') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPuntoMinimo() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Punto de Pedido') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPuntoPedido() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Punto de Maximo') ?>:</label> <label class='dato'><?php echo $ins_insumo_pan_panol->getPuntoMaximo() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

