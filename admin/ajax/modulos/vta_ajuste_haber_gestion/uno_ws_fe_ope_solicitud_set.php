<?php
$sel = '';
$css_sel = '';
$vta_ajuste_haber_ws_fe_ope_solicitud_id = '';
if(in_array($ws_fe_ope_solicitud->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'vta_ajuste_haber_id', 'valor' => $o_padre->getId()),
		array('campo' => 'ws_fe_ope_solicitud_id', 'valor' => $ws_fe_ope_solicitud->getId())
	);
	$vta_ajuste_haber_ws_fe_ope_solicitud = new VtaAjusteHaberWsFeOpeSolicitud();
	$vta_ajuste_haber_ws_fe_ope_solicitud = VtaAjusteHaberWsFeOpeSolicitud::getOxArray($arr_cri);
	$vta_ajuste_haber_ws_fe_ope_solicitud_id = $vta_ajuste_haber_ws_fe_ope_solicitud->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $ws_fe_ope_solicitud->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_ALTA_RELACION_WS_FE_OPE_SOLICITUD_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ws_fe_ope_solicitud_id_<?php echo $ws_fe_ope_solicitud->getId() ?>' name='chk_ws_fe_ope_solicitud[<?php echo $ws_fe_ope_solicitud->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ws_fe_ope_solicitud->getId() ?>' relacion_id='<?php echo $vta_ajuste_haber_ws_fe_ope_solicitud_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_ALTA_RELACION_WS_FE_OPE_SOLICITUD_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_ajuste_haber_ws_fe_ope_solicitud_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_ajuste_haber_ws_fe_ope_solicitud/vta_ajuste_haber_ws_fe_ope_solicitud_alta.php?id=<?php Gral::_echo($vta_ajuste_haber_ws_fe_ope_solicitud_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>, 'ws_fe_ope_solicitud', 'vta_ajuste_haber', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaAjusteHaber', 'VtaAjusteHaberWsFeOpeSolicitud')" title="Editar VtaAjusteHaberWsFeOpeSolicitud"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA')){ ?>	
        <a class='boton' href='ws_fe_ope_solicitud_alta.php?id=<?php echo $ws_fe_ope_solicitud->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ws_fe_ope_solicitud->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion' for='chk_ws_fe_ope_solicitud_id_<?php echo $ws_fe_ope_solicitud->getId() ?>'><strong><?php Gral::_echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong></label>

    <?php if($vta_ajuste_haber_ws_fe_ope_solicitud_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
setInitAjusteHaberGestion();
</script>

