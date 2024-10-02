<?php
$sel = '';
$css_sel = '';
$pde_tipo_factura_ws_fe_param_tipo_comprobante_id = '';
if(in_array($ws_fe_param_tipo_comprobante_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'pde_tipo_factura_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ws_fe_param_tipo_comprobante_id', 'valor' => $ws_fe_param_tipo_comprobante_relacionado->getId())
    );
    $pde_tipo_factura_ws_fe_param_tipo_comprobante = PdeTipoFacturaWsFeParamTipoComprobante::getOxArray($array);
    $pde_tipo_factura_ws_fe_param_tipo_comprobante_id = $pde_tipo_factura_ws_fe_param_tipo_comprobante->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_ALTA_RELACION_WS_FE_PARAM_TIPO_COMPROBANTE_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ws_fe_param_tipo_comprobante_id_<?php echo $ws_fe_param_tipo_comprobante_relacionado->getId() ?>' name='chk_ws_fe_param_tipo_comprobante[<?php echo $ws_fe_param_tipo_comprobante_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ws_fe_param_tipo_comprobante_relacionado->getId() ?>' relacion_id='<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_ALTA_RELACION_WS_FE_PARAM_TIPO_COMPROBANTE_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_tipo_factura_ws_fe_param_tipo_comprobante_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_tipo_factura_ws_fe_param_tipo_comprobante/pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php?id=<?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ws_fe_param_tipo_comprobante_relacionado->getId()) ?>, 'ws_fe_param_tipo_comprobante', 'pde_tipo_factura', <?php Gral::_echo($o_padre->getId()) ?>, 'PdeTipoFactura', 'PdeTipoFacturaWsFeParamTipoComprobante')" title="Editar PdeTipoFacturaWsFeParamTipoComprobante"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>	
        <a class='boton' href='ws_fe_param_tipo_comprobante_alta.php?id=<?php echo $ws_fe_param_tipo_comprobante_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ws_fe_param_tipo_comprobante_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ws_fe_param_tipo_comprobante_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ws_fe_param_tipo_comprobante_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ws_fe_param_tipo_comprobante_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($pde_tipo_factura_ws_fe_param_tipo_comprobante_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

