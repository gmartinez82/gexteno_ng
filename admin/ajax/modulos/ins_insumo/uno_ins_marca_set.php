<?php
$sel = '';
$css_sel = '';
$ins_insumo_ins_marca_id = '';
if(in_array($ins_marca_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ins_insumo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_marca_id', 'valor' => $ins_marca_relacionado->getId())
    );
    $ins_insumo_ins_marca = InsInsumoInsMarca::getOxArray($array);
    $ins_insumo_ins_marca_id = $ins_insumo_ins_marca->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $ins_marca_relacionado->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_MARCA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_marca_id_<?php echo $ins_marca_relacionado->getId() ?>' name='chk_ins_marca[<?php echo $ins_marca_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_marca_relacionado->getId() ?>' relacion_id='<?php echo $ins_insumo_ins_marca_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_MARCA_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_insumo_ins_marca_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_ins_marca/ins_insumo_ins_marca_alta.php?id=<?php Gral::_echo($ins_insumo_ins_marca_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_marca_relacionado->getId()) ?>, 'ins_marca', 'ins_insumo', <?php Gral::_echo($o_padre->getId()) ?>, 'InsInsumo', 'InsInsumoInsMarca')" title="Editar InsInsumoInsMarca"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA')){ ?>	
        <a class='boton' href='ins_marca_alta.php?id=<?php echo $ins_marca_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_marca_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $ins_marca_relacionado->getPathImagenPrincipal() ?>" rel="imagen-ins_marca-<?php echo $ins_marca_relacionado->getId() ?>">
            <img src="<?php echo $ins_marca_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del InsMarca" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_marca_relacionado->getDescripcion()) ?></label>

    <?php if($ins_insumo_ins_marca_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php echo $ins_insumo_ins_marca->getCodigo() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

