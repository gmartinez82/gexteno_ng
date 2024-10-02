<?php
$sel = '';
$css_sel = '';
$ins_insumo_vinculado_id = '';
Gral::prr($o_ids);
if(in_array($ins_insumo->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'ins_insumo_id', 'valor' => $o_padre->getId()),
		array('campo' => 'ins_insumo_vinculado', 'valor' => $ins_insumo->getId())
	);
	$ins_insumo_vinculado = new InsInsumoVinculado();
	$ins_insumo_vinculado = InsInsumoVinculado::getOxArray($arr_cri);
	$ins_insumo_vinculado_id = $ins_insumo_vinculado->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $ins_insumo->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_INSUMO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_us_credencial_id_<?php echo $ins_insumo->getId() ?>' name='chk_ins_insumo[<?php echo $ins_insumo->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_insumo->getId() ?>' relacion_id='<?php echo $ins_insumo_vinculado_id ?>' />
    <?php } ?>

    <label class='descripcion' for='chk_ins_insumo_id_<?php echo $ins_insumo->getId() ?>'><strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong></label>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_INSUMO_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_insumo_vinculado_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_vinculado/ins_insumo_vinculado_alta.php?id=<?php Gral::_echo($ins_insumo_vinculado_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_insumo->getId()) ?>, 'ins_insumo', 'ins_insumo', <?php Gral::_echo($o_padre->getId()) ?>, 'InsInsumo', 'InsInsumoVinculado')" title="Editar InsInsumoVinculado"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')){ ?>	
        <a class='boton' href='ins_insumo_alta.php?id=<?php echo $ins_insumo->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_insumo->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
	
    <div class='segunda'>
        <label class='light'><?php Lang::_lang('Cod') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo->getId()) ?></label><br />
    </div>

    <?php if($ins_insumo_vinculado_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

