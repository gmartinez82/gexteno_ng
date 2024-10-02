<?php
$sel = '';
$css_sel = '';
$eku_param_geo_ciudad_geo_localidad_id = '';
if(in_array($eku_param_geo_ciudad_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'geo_localidad_id', 'valor' => $o_padre->getId()),
        array('campo' => 'eku_param_geo_ciudad_id', 'valor' => $eku_param_geo_ciudad_relacionado->getId())
    );
    $eku_param_geo_ciudad_geo_localidad = EkuParamGeoCiudadGeoLocalidad::getOxArray($array);
    $eku_param_geo_ciudad_geo_localidad_id = $eku_param_geo_ciudad_geo_localidad->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA_RELACION_EKU_PARAM_GEO_CIUDAD_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_eku_param_geo_ciudad_id_<?php echo $eku_param_geo_ciudad_relacionado->getId() ?>' name='chk_eku_param_geo_ciudad[<?php echo $eku_param_geo_ciudad_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $eku_param_geo_ciudad_relacionado->getId() ?>' relacion_id='<?php echo $eku_param_geo_ciudad_geo_localidad_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA_RELACION_EKU_PARAM_GEO_CIUDAD_ACCIONES_EDITAR')){ ?>	
        <?php if($eku_param_geo_ciudad_geo_localidad_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_geo_ciudad_geo_localidad/eku_param_geo_ciudad_geo_localidad_alta.php?id=<?php Gral::_echo($eku_param_geo_ciudad_geo_localidad_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($eku_param_geo_ciudad_relacionado->getId()) ?>, 'eku_param_geo_ciudad', 'geo_localidad', <?php Gral::_echo($o_padre->getId()) ?>, 'GeoLocalidad', 'EkuParamGeoCiudadGeoLocalidad')" title="Editar EkuParamGeoCiudadGeoLocalidad"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_ALTA')){ ?>	
        <a class='boton' href='eku_param_geo_ciudad_alta.php?id=<?php echo $eku_param_geo_ciudad_relacionado->getId() ?>&hash=<?php echo $eku_param_geo_ciudad_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($eku_param_geo_ciudad_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($eku_param_geo_ciudad_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($eku_param_geo_ciudad_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $eku_param_geo_ciudad_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($eku_param_geo_ciudad_geo_localidad_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

