
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($gral_novedad_motivo_extendido->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_ALTA_VINCULO_GRAL_NOVEDAD_MOTIVO_EXTENDIDO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_novedad_motivo_extendido/gral_novedad_motivo_extendido_alta.php?id=<?php Gral::_echo($gral_novedad_motivo_extendido->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($gral_novedad_motivo_extendido->getId()) ?>, 'gral_novedad_motivo', 'gral_novedad_motivo_extendido', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralNovedadMotivoExtendido') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_ALTA_VINCULO_GRAL_NOVEDAD_MOTIVO_EXTENDIDO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($gral_novedad_motivo_extendido->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Descripcion') ?>:</label> <label class='dato'><?php Gral::_echo($gral_novedad_motivo_extendido->getDescripcion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

