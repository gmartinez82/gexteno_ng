
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($geo_localidad->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_ALTA_VINCULO_GEO_LOCALIDAD_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/geo_localidad/geo_localidad_alta.php?id=<?php Gral::_echo($geo_localidad->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($geo_localidad->getId()) ?>, 'geo_provincia', 'geo_localidad', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GeoLocalidad') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_ALTA_VINCULO_GEO_LOCALIDAD_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($geo_localidad->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($geo_localidad->getCodigo()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($geo_localidad->getCodigoEku()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($geo_localidad->getCodigoDistritoEku()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

