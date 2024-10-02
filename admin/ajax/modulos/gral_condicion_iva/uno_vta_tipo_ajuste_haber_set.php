<?php
$sel = '';
$css_sel = '';
$gral_condicion_iva_vta_tipo_ajuste_haber_id = '';
if(in_array($vta_tipo_ajuste_haber_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_condicion_iva_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_tipo_ajuste_haber_id', 'valor' => $vta_tipo_ajuste_haber_relacionado->getId())
    );
    $gral_condicion_iva_vta_tipo_ajuste_haber = GralCondicionIvaVtaTipoAjusteHaber::getOxArray($array);
    $gral_condicion_iva_vta_tipo_ajuste_haber_id = $gral_condicion_iva_vta_tipo_ajuste_haber->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_VTA_TIPO_AJUSTE_HABER_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_tipo_ajuste_haber_id_<?php echo $vta_tipo_ajuste_haber_relacionado->getId() ?>' name='chk_vta_tipo_ajuste_haber[<?php echo $vta_tipo_ajuste_haber_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_tipo_ajuste_haber_relacionado->getId() ?>' relacion_id='<?php echo $gral_condicion_iva_vta_tipo_ajuste_haber_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_VTA_TIPO_AJUSTE_HABER_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_condicion_iva_vta_tipo_ajuste_haber_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_condicion_iva_vta_tipo_ajuste_haber/gral_condicion_iva_vta_tipo_ajuste_haber_alta.php?id=<?php Gral::_echo($gral_condicion_iva_vta_tipo_ajuste_haber_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_tipo_ajuste_haber_relacionado->getId()) ?>, 'vta_tipo_ajuste_haber', 'gral_condicion_iva', <?php Gral::_echo($o_padre->getId()) ?>, 'GralCondicionIva', 'GralCondicionIvaVtaTipoAjusteHaber')" title="Editar GralCondicionIvaVtaTipoAjusteHaber"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_AJUSTE_HABER_ALTA')){ ?>	
        <a class='boton' href='vta_tipo_ajuste_haber_alta.php?id=<?php echo $vta_tipo_ajuste_haber_relacionado->getId() ?>&hash=<?php echo $vta_tipo_ajuste_haber_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_tipo_ajuste_haber_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_tipo_ajuste_haber_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_tipo_ajuste_haber_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_tipo_ajuste_haber_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_condicion_iva_vta_tipo_ajuste_haber_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

