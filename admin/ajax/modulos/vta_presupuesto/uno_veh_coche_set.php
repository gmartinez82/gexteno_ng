<?php
$sel = '';
$css_sel = '';
$vta_presupuesto_veh_coche_id = '';
if(in_array($veh_coche_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'vta_presupuesto_id', 'valor' => $o_padre->getId()),
        array('campo' => 'veh_coche_id', 'valor' => $veh_coche_relacionado->getId())
    );
    $vta_presupuesto_veh_coche = VtaPresupuestoVehCoche::getOxArray($array);
    $vta_presupuesto_veh_coche_id = $vta_presupuesto_veh_coche->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA_RELACION_VEH_COCHE_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_veh_coche_id_<?php echo $veh_coche_relacionado->getId() ?>' name='chk_veh_coche[<?php echo $veh_coche_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $veh_coche_relacionado->getId() ?>' relacion_id='<?php echo $vta_presupuesto_veh_coche_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA_RELACION_VEH_COCHE_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_presupuesto_veh_coche_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_presupuesto_veh_coche/vta_presupuesto_veh_coche_alta.php?id=<?php Gral::_echo($vta_presupuesto_veh_coche_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($veh_coche_relacionado->getId()) ?>, 'veh_coche', 'vta_presupuesto', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaPresupuesto', 'VtaPresupuestoVehCoche')" title="Editar VtaPresupuestoVehCoche"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA')){ ?>	
        <a class='boton' href='veh_coche_alta.php?id=<?php echo $veh_coche_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($veh_coche_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $veh_coche_relacionado->getPathImagenPrincipal() ?>" rel="imagen-veh_coche-<?php echo $veh_coche_relacionado->getId() ?>">
            <img src="<?php echo $veh_coche_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del VehCoche" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($veh_coche_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($veh_coche_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $veh_coche_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_presupuesto_veh_coche_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

