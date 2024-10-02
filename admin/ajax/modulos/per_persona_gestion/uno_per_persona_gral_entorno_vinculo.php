
<div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($per_persona_gral_entorno->getDescripcion()) ?></strong></label>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_VINCULO_PER_PERSONA_GRAL_ENTORNO_ACCIONES')){ ?>
	<div class='link'>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/per_persona_gral_entorno/per_persona_gral_entorno_alta.php?id=<?php Gral::_echo($per_persona_gral_entorno->getId()) ?>" contenedor="div_modal" ancho="600" alto="500" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($per_persona_gral_entorno->getId()) ?>, 'per_persona', 'per_persona_gral_entorno', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersonaGralEntorno') ?>">
        <img src='imgs/btn_modi.gif' width='20' border='0' />
        </div>

        <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($per_persona_gral_entorno->getEstado())  ?>.gif' width='18' border='0' />
        </div>

	</div>
	<?php } ?>
		
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('GralEntorno') ?>:</label> <label class='dato'><?php Gral::_echo($per_persona_gral_entorno->getGralEntorno()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($per_persona_gral_entorno->getCodigo()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Codigo Cred') ?>:</label> <label class='dato'><?php Gral::_echo($per_persona_gral_entorno->getCodigoCredencial()) ?></label><br />
        
    </div>
	
</div>
<script>
setInit();
</script>

