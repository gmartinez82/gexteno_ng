<?php
$sel = '';
$css_sel = '';
$ins_insumo_veh_modelo_id = '';
if(in_array($ins_insumo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'veh_modelo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo_relacionado->getId())
    );
    $ins_insumo_veh_modelo = InsInsumoVehModelo::getOxArray($array);
    $ins_insumo_veh_modelo_id = $ins_insumo_veh_modelo->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $ins_insumo_relacionado->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_ALTA_RELACION_INS_INSUMO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_insumo_id_<?php echo $ins_insumo_relacionado->getId() ?>' name='chk_ins_insumo[<?php echo $ins_insumo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_insumo_relacionado->getId() ?>' relacion_id='<?php echo $ins_insumo_veh_modelo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_ALTA_RELACION_INS_INSUMO_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_insumo_veh_modelo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_veh_modelo/ins_insumo_veh_modelo_alta.php?id=<?php Gral::_echo($ins_insumo_veh_modelo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_insumo_relacionado->getId()) ?>, 'ins_insumo', 'veh_modelo', <?php Gral::_echo($o_padre->getId()) ?>, 'VehModelo', 'InsInsumoVehModelo')" title="Editar InsInsumoVehModelo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')){ ?>	
        <a class='boton' href='ins_insumo_alta.php?id=<?php echo $ins_insumo_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_insumo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $ins_insumo_relacionado->getPathImagenPrincipal() ?>" rel="imagen-ins_insumo-<?php echo $ins_insumo_relacionado->getId() ?>">
            <img src="<?php echo $ins_insumo_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del InsInsumo" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_insumo_relacionado->getDescripcion()) ?></label>

    <?php if($ins_insumo_veh_modelo_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

