<?php
$sel = '';
$css_sel = '';
$gral_condicion_iva_vta_tipo_ajuste_debe_id = '';
if(in_array($vta_tipo_ajuste_debe_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_condicion_iva_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_tipo_ajuste_debe_id', 'valor' => $vta_tipo_ajuste_debe_relacionado->getId())
    );
    $gral_condicion_iva_vta_tipo_ajuste_debe = GralCondicionIvaVtaTipoAjusteDebe::getOxArray($array);
    $gral_condicion_iva_vta_tipo_ajuste_debe_id = $gral_condicion_iva_vta_tipo_ajuste_debe->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_VTA_TIPO_AJUSTE_DEBE_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_tipo_ajuste_debe_id_<?php echo $vta_tipo_ajuste_debe_relacionado->getId() ?>' name='chk_vta_tipo_ajuste_debe[<?php echo $vta_tipo_ajuste_debe_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_tipo_ajuste_debe_relacionado->getId() ?>' relacion_id='<?php echo $gral_condicion_iva_vta_tipo_ajuste_debe_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_VTA_TIPO_AJUSTE_DEBE_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_condicion_iva_vta_tipo_ajuste_debe_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_condicion_iva_vta_tipo_ajuste_debe/gral_condicion_iva_vta_tipo_ajuste_debe_alta.php?id=<?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_debe_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_tipo_ajuste_debe_relacionado->getId()) ?>, 'vta_tipo_ajuste_debe', 'gral_condicion_iva', <?php Gral::_echo($o_padre->getId()) ?>, 'GralCondicionIva', 'GralCondicionIvaVtaTipoAjusteDebe')" title="Editar GralCondicionIvaVtaTipoAjusteDebe"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_AJUSTE_DEBE_ALTA')){ ?>	
        <a class='boton' href='vta_tipo_ajuste_debe_alta.php?id=<?php echo $vta_tipo_ajuste_debe_relacionado->getId() ?>&hash=<?php echo $vta_tipo_ajuste_debe_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_tipo_ajuste_debe_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_tipo_ajuste_debe_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_tipo_ajuste_debe_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_tipo_ajuste_debe_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_condicion_iva_vta_tipo_ajuste_debe_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

