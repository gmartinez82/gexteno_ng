<?php
$sel = '';
$css_sel = '';
$gral_ruta_geo_localidad_cli_centro_recepcion_id = '';
if(in_array($geo_localidad_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'cli_cliente_id', 'valor' => $o_padre->getId()),
        array('campo' => 'geo_localidad_id', 'valor' => $geo_localidad_relacionado->getId())
    );
    $gral_ruta_geo_localidad_cli_centro_recepcion = GralRutaGeoLocalidadCliCentroRecepcion::getOxArray($array);
    $gral_ruta_geo_localidad_cli_centro_recepcion_id = $gral_ruta_geo_localidad_cli_centro_recepcion->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GEO_LOCALIDAD_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_geo_localidad_id_<?php echo $geo_localidad_relacionado->getId() ?>' name='chk_geo_localidad[<?php echo $geo_localidad_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $geo_localidad_relacionado->getId() ?>' relacion_id='<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GEO_LOCALIDAD_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_ruta_geo_localidad_cli_centro_recepcion_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_ruta_geo_localidad_cli_centro_recepcion/gral_ruta_geo_localidad_cli_centro_recepcion_alta.php?id=<?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($geo_localidad_relacionado->getId()) ?>, 'geo_localidad', 'cli_cliente', <?php Gral::_echo($o_padre->getId()) ?>, 'CliCliente', 'GralRutaGeoLocalidadCliCentroRecepcion')" title="Editar GralRutaGeoLocalidadCliCentroRecepcion"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA')){ ?>	
        <a class='boton' href='geo_localidad_alta.php?id=<?php echo $geo_localidad_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($geo_localidad_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($geo_localidad_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($geo_localidad_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $geo_localidad_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_ruta_geo_localidad_cli_centro_recepcion_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

