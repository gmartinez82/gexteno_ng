<?php
$sel = '';
$css_sel = '';
$vta_nota_debito_ws_fe_ope_solicitud_id = '';
if(in_array($ws_fe_ope_solicitud_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'vta_nota_debito_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ws_fe_ope_solicitud_id', 'valor' => $ws_fe_ope_solicitud_relacionado->getId())
    );
    $vta_nota_debito_ws_fe_ope_solicitud = VtaNotaDebitoWsFeOpeSolicitud::getOxArray($array);
    $vta_nota_debito_ws_fe_ope_solicitud_id = $vta_nota_debito_ws_fe_ope_solicitud->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_WS_FE_OPE_SOLICITUD_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ws_fe_ope_solicitud_id_<?php echo $ws_fe_ope_solicitud_relacionado->getId() ?>' name='chk_ws_fe_ope_solicitud[<?php echo $ws_fe_ope_solicitud_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ws_fe_ope_solicitud_relacionado->getId() ?>' relacion_id='<?php echo $vta_nota_debito_ws_fe_ope_solicitud_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_WS_FE_OPE_SOLICITUD_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_nota_debito_ws_fe_ope_solicitud_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_nota_debito_ws_fe_ope_solicitud/vta_nota_debito_ws_fe_ope_solicitud_alta.php?id=<?php Gral::_echo($vta_nota_debito_ws_fe_ope_solicitud_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ws_fe_ope_solicitud_relacionado->getId()) ?>, 'ws_fe_ope_solicitud', 'vta_nota_debito', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaNotaDebito', 'VtaNotaDebitoWsFeOpeSolicitud')" title="Editar VtaNotaDebitoWsFeOpeSolicitud"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA')){ ?>	
        <a class='boton' href='ws_fe_ope_solicitud_alta.php?id=<?php echo $ws_fe_ope_solicitud_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ws_fe_ope_solicitud_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ws_fe_ope_solicitud_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ws_fe_ope_solicitud_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ws_fe_ope_solicitud_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_nota_debito_ws_fe_ope_solicitud_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

