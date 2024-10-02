<?php
$sel = '';
$css_sel = '';
$pde_nota_credito_pde_nota_debito_id = '';
if(in_array($pde_nota_debito->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'pde_nota_credito_id', 'valor' => $o_padre->getId()),
		array('campo' => 'pde_nota_debito_id', 'valor' => $pde_nota_debito->getId())
	);
	$pde_nota_credito_pde_nota_debito = new PdeNotaCreditoPdeNotaDebito();
	$pde_nota_credito_pde_nota_debito = PdeNotaCreditoPdeNotaDebito::getOxArray($arr_cri);
	$pde_nota_credito_pde_nota_debito_id = $pde_nota_credito_pde_nota_debito->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $pde_nota_debito->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_nota_debito_id_<?php echo $pde_nota_debito->getId() ?>' name='chk_pde_nota_debito[<?php echo $pde_nota_debito->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_nota_debito->getId() ?>' relacion_id='<?php echo $pde_nota_credito_pde_nota_debito_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_nota_credito_pde_nota_debito_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_nota_credito_pde_nota_debito/pde_nota_credito_pde_nota_debito_alta.php?id=<?php Gral::_echo($pde_nota_credito_pde_nota_debito_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_nota_debito->getId()) ?>, 'pde_nota_debito', 'pde_nota_credito', <?php Gral::_echo($o_padre->getId()) ?>, 'PdeNotaCredito', 'PdeNotaCreditoPdeNotaDebito')" title="Editar PdeNotaCreditoPdeNotaDebito"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA')){ ?>	
        <a class='boton' href='pde_nota_debito_alta.php?id=<?php echo $pde_nota_debito->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_nota_debito->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion' for='chk_pde_nota_debito_id_<?php echo $pde_nota_debito->getId() ?>'><strong><?php Gral::_echo($pde_nota_debito->getDescripcion()) ?></strong></label>

    <?php if($pde_nota_credito_pde_nota_debito_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

