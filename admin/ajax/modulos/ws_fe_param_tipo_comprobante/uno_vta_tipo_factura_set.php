<?php
$sel = '';
$css_sel = '';
$vta_tipo_factura_ws_fe_param_tipo_comprobante_id = '';
if(in_array($vta_tipo_factura_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ws_fe_param_tipo_comprobante_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_tipo_factura_id', 'valor' => $vta_tipo_factura_relacionado->getId())
    );
    $vta_tipo_factura_ws_fe_param_tipo_comprobante = VtaTipoFacturaWsFeParamTipoComprobante::getOxArray($array);
    $vta_tipo_factura_ws_fe_param_tipo_comprobante_id = $vta_tipo_factura_ws_fe_param_tipo_comprobante->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_RELACION_VTA_TIPO_FACTURA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_tipo_factura_id_<?php echo $vta_tipo_factura_relacionado->getId() ?>' name='chk_vta_tipo_factura[<?php echo $vta_tipo_factura_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_tipo_factura_relacionado->getId() ?>' relacion_id='<?php echo $vta_tipo_factura_ws_fe_param_tipo_comprobante_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_RELACION_VTA_TIPO_FACTURA_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_tipo_factura_ws_fe_param_tipo_comprobante_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tipo_factura_ws_fe_param_tipo_comprobante/vta_tipo_factura_ws_fe_param_tipo_comprobante_alta.php?id=<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_tipo_factura_relacionado->getId()) ?>, 'vta_tipo_factura', 'ws_fe_param_tipo_comprobante', <?php Gral::_echo($o_padre->getId()) ?>, 'WsFeParamTipoComprobante', 'VtaTipoFacturaWsFeParamTipoComprobante')" title="Editar VtaTipoFacturaWsFeParamTipoComprobante"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_FACTURA_ALTA')){ ?>	
        <a class='boton' href='vta_tipo_factura_alta.php?id=<?php echo $vta_tipo_factura_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_tipo_factura_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_tipo_factura_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_tipo_factura_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_tipo_factura_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_tipo_factura_ws_fe_param_tipo_comprobante_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

