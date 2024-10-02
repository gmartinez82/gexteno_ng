
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($fnd_caja_ingreso->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_VINCULO_FND_CAJA_INGRESO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_caja_ingreso/fnd_caja_ingreso_alta.php?id=<?php Gral::_echo($fnd_caja_ingreso->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($fnd_caja_ingreso->getId()) ?>, 'fnd_caja', 'fnd_caja_ingreso', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaIngreso') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_VINCULO_FND_CAJA_INGRESO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($fnd_caja_ingreso->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
        </div>
	
    </div>
<script>
setInit();
</script>

