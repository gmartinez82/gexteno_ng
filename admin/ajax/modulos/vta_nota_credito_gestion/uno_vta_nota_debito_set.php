<?php
$sel = '';
$css_sel = '';
$vta_nota_credito_vta_nota_debito_id = '';
if(in_array($vta_nota_debito->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'vta_nota_credito_id', 'valor' => $o_padre->getId()),
		array('campo' => 'vta_nota_debito_id', 'valor' => $vta_nota_debito->getId())
	);
	$vta_nota_credito_vta_nota_debito = new VtaNotaCreditoVtaNotaDebito();
	$vta_nota_credito_vta_nota_debito = VtaNotaCreditoVtaNotaDebito::getOxArray($arr_cri);
	$vta_nota_credito_vta_nota_debito_id = $vta_nota_credito_vta_nota_debito->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $vta_nota_debito->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_nota_debito_id_<?php echo $vta_nota_debito->getId() ?>' name='chk_vta_nota_debito[<?php echo $vta_nota_debito->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_nota_debito->getId() ?>' relacion_id='<?php echo $vta_nota_credito_vta_nota_debito_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_nota_credito_vta_nota_debito_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_nota_credito_vta_nota_debito/vta_nota_credito_vta_nota_debito_alta.php?id=<?php Gral::_echo($vta_nota_credito_vta_nota_debito_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_nota_debito->getId()) ?>, 'vta_nota_debito', 'vta_nota_credito', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaNotaCredito', 'VtaNotaCreditoVtaNotaDebito')" title="Editar VtaNotaCreditoVtaNotaDebito"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA')){ ?>	
        <a class='boton' href='vta_nota_debito_alta.php?id=<?php echo $vta_nota_debito->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_nota_debito->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion' for='chk_vta_nota_debito_id_<?php echo $vta_nota_debito->getId() ?>'><strong><?php Gral::_echo($vta_nota_debito->getDescripcion()) ?></strong></label>

    <?php if($vta_nota_credito_vta_nota_debito_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

