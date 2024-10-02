<?php
$sel = '';
$css_sel = '';
$pde_tipo_factura_ws_fe_param_tipo_comprobante_id = '';
if(in_array($pde_tipo_factura_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ws_fe_param_tipo_comprobante_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pde_tipo_factura_id', 'valor' => $pde_tipo_factura_relacionado->getId())
    );
    $pde_tipo_factura_ws_fe_param_tipo_comprobante = PdeTipoFacturaWsFeParamTipoComprobante::getOxArray($array);
    $pde_tipo_factura_ws_fe_param_tipo_comprobante_id = $pde_tipo_factura_ws_fe_param_tipo_comprobante->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_RELACION_PDE_TIPO_FACTURA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_tipo_factura_id_<?php echo $pde_tipo_factura_relacionado->getId() ?>' name='chk_pde_tipo_factura[<?php echo $pde_tipo_factura_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_tipo_factura_relacionado->getId() ?>' relacion_id='<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_RELACION_PDE_TIPO_FACTURA_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_tipo_factura_ws_fe_param_tipo_comprobante_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_tipo_factura_ws_fe_param_tipo_comprobante/pde_tipo_factura_ws_fe_param_tipo_comprobante_alta.php?id=<?php Gral::_echo($pde_tipo_factura_ws_fe_param_tipo_comprobante_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_tipo_factura_relacionado->getId()) ?>, 'pde_tipo_factura', 'ws_fe_param_tipo_comprobante', <?php Gral::_echo($o_padre->getId()) ?>, 'WsFeParamTipoComprobante', 'PdeTipoFacturaWsFeParamTipoComprobante')" title="Editar PdeTipoFacturaWsFeParamTipoComprobante"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_FACTURA_ALTA')){ ?>	
        <a class='boton' href='pde_tipo_factura_alta.php?id=<?php echo $pde_tipo_factura_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_tipo_factura_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($pde_tipo_factura_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($pde_tipo_factura_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $pde_tipo_factura_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($pde_tipo_factura_ws_fe_param_tipo_comprobante_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

