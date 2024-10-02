
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($vta_tributo_exencion->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_VTA_TRIBUTO_EXENCION_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tributo_exencion/vta_tributo_exencion_alta.php?id=<?php Gral::_echo($vta_tributo_exencion->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($vta_tributo_exencion->getId()) ?>, 'cli_cliente', 'vta_tributo_exencion', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTributoExencion') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_VTA_TRIBUTO_EXENCION_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($vta_tributo_exencion->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('VtaTributo') ?>:</label> <label class='dato'><?php Gral::_echo($vta_tributo_exencion->getVtaTributo()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Fecha Inicio') ?>:</label> <label class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_tributo_exencion->getFechaInicio())) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Fecha Fin') ?>:</label> <label class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_tributo_exencion->getFechaFin())) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

