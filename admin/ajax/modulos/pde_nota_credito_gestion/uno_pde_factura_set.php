<?php
$sel = '';
$css_sel = '';
$pde_factura_pde_nota_credito_id = '';
if(in_array($pde_factura->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'pde_nota_credito_id', 'valor' => $o_padre->getId()),
		array('campo' => 'pde_factura_id', 'valor' => $pde_factura->getId())
	);
	$pde_factura_pde_nota_credito = new PdeFacturaPdeNotaCredito();
	$pde_factura_pde_nota_credito = PdeFacturaPdeNotaCredito::getOxArray($arr_cri);
	$pde_factura_pde_nota_credito_id = $pde_factura_pde_nota_credito->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $pde_factura->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_factura_id_<?php echo $pde_factura->getId() ?>' name='chk_pde_factura[<?php echo $pde_factura->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_factura->getId() ?>' relacion_id='<?php echo $pde_factura_pde_nota_credito_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_factura_pde_nota_credito_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_factura_pde_nota_credito/pde_factura_pde_nota_credito_alta.php?id=<?php Gral::_echo($pde_factura_pde_nota_credito_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_factura->getId()) ?>, 'pde_factura', 'pde_nota_credito', <?php Gral::_echo($o_padre->getId()) ?>, 'PdeNotaCredito', 'PdeFacturaPdeNotaCredito')" title="Editar PdeFacturaPdeNotaCredito"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA')){ ?>	
        <a class='boton' href='pde_factura_alta.php?id=<?php echo $pde_factura->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_factura->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion' for='chk_pde_factura_id_<?php echo $pde_factura->getId() ?>'><strong><?php Gral::_echo($pde_factura->getDescripcion()) ?></strong></label>

    <?php if($pde_factura_pde_nota_credito_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

