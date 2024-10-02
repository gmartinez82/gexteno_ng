
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($per_persona_gral_sucursal->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_VINCULO_PER_PERSONA_GRAL_SUCURSAL_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_alta.php?id=<?php Gral::_echo($per_persona_gral_sucursal->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($per_persona_gral_sucursal->getId()) ?>, 'per_persona', 'per_persona_gral_sucursal', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersonaGralSucursal') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_VINCULO_PER_PERSONA_GRAL_SUCURSAL_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($per_persona_gral_sucursal->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('GralSucursal') ?>:</label> <label class='dato'><?php Gral::_echo($per_persona_gral_sucursal->getGralSucursal()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($per_persona_gral_sucursal->getCodigo()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

