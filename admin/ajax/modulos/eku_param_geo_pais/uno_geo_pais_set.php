<?php
$sel = '';
$css_sel = '';
$eku_param_geo_pais_geo_pais_id = '';
if(in_array($geo_pais_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'eku_param_geo_pais_id', 'valor' => $o_padre->getId()),
        array('campo' => 'geo_pais_id', 'valor' => $geo_pais_relacionado->getId())
    );
    $eku_param_geo_pais_geo_pais = EkuParamGeoPaisGeoPais::getOxArray($array);
    $eku_param_geo_pais_geo_pais_id = $eku_param_geo_pais_geo_pais->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_ALTA_RELACION_GEO_PAIS_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_geo_pais_id_<?php echo $geo_pais_relacionado->getId() ?>' name='chk_geo_pais[<?php echo $geo_pais_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $geo_pais_relacionado->getId() ?>' relacion_id='<?php echo $eku_param_geo_pais_geo_pais_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_ALTA_RELACION_GEO_PAIS_ACCIONES_EDITAR')){ ?>	
        <?php if($eku_param_geo_pais_geo_pais_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_geo_pais_geo_pais/eku_param_geo_pais_geo_pais_alta.php?id=<?php Gral::_echo($eku_param_geo_pais_geo_pais_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($geo_pais_relacionado->getId()) ?>, 'geo_pais', 'eku_param_geo_pais', <?php Gral::_echo($o_padre->getId()) ?>, 'EkuParamGeoPais', 'EkuParamGeoPaisGeoPais')" title="Editar EkuParamGeoPaisGeoPais"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA')){ ?>	
        <a class='boton' href='geo_pais_alta.php?id=<?php echo $geo_pais_relacionado->getId() ?>&hash=<?php echo $geo_pais_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($geo_pais_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($geo_pais_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($geo_pais_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $geo_pais_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($eku_param_geo_pais_geo_pais_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

