<?php
$sel = '';
$css_sel = '';
$vta_presupuesto_veh_coche_id = '';
if(in_array($vta_presupuesto_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'veh_coche_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_presupuesto_id', 'valor' => $vta_presupuesto_relacionado->getId())
    );
    $vta_presupuesto_veh_coche = VtaPresupuestoVehCoche::getOxArray($array);
    $vta_presupuesto_veh_coche_id = $vta_presupuesto_veh_coche->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA_RELACION_VTA_PRESUPUESTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_presupuesto_id_<?php echo $vta_presupuesto_relacionado->getId() ?>' name='chk_vta_presupuesto[<?php echo $vta_presupuesto_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_presupuesto_relacionado->getId() ?>' relacion_id='<?php echo $vta_presupuesto_veh_coche_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA_RELACION_VTA_PRESUPUESTO_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_presupuesto_veh_coche_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_presupuesto_veh_coche/vta_presupuesto_veh_coche_alta.php?id=<?php Gral::_echo($vta_presupuesto_veh_coche_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_presupuesto_relacionado->getId()) ?>, 'vta_presupuesto', 'veh_coche', <?php Gral::_echo($o_padre->getId()) ?>, 'VehCoche', 'VtaPresupuestoVehCoche')" title="Editar VtaPresupuestoVehCoche"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA')){ ?>	
        <a class='boton' href='vta_presupuesto_alta.php?id=<?php echo $vta_presupuesto_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_presupuesto_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_presupuesto_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_presupuesto_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_presupuesto_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_presupuesto_veh_coche_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

