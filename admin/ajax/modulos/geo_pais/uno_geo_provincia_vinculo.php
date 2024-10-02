
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($geo_provincia->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA_VINCULO_GEO_PROVINCIA_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/geo_provincia/geo_provincia_alta.php?id=<?php Gral::_echo($geo_provincia->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($geo_provincia->getId()) ?>, 'geo_pais', 'geo_provincia', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GeoProvincia') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA_VINCULO_GEO_PROVINCIA_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($geo_provincia->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($geo_provincia->getCodigo()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($geo_provincia->getCodigoEku()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

