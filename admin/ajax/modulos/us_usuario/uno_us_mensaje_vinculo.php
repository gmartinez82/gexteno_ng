
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($us_mensaje->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_VINCULO_US_MENSAJE_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/us_mensaje/us_mensaje_alta.php?id=<?php Gral::_echo($us_mensaje->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($us_mensaje->getId()) ?>, 'us_usuario', 'us_mensaje', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsMensaje') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_VINCULO_US_MENSAJE_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($us_mensaje->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
        </div>
	
    </div>
<script>
setInit();
</script>

