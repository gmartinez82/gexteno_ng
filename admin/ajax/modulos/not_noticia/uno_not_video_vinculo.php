
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($not_video->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_VINCULO_NOT_VIDEO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/not_video/not_video_alta.php?id=<?php Gral::_echo($not_video->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($not_video->getId()) ?>, 'not_noticia', 'not_video', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotVideo') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_VINCULO_NOT_VIDEO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($not_video->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Descripcion') ?>:</label> <label class='dato'><?php Gral::_echo($not_video->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('URL Externa') ?>:</label> <label class='dato'><?php Gral::_echo($not_video->getCodigo()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

