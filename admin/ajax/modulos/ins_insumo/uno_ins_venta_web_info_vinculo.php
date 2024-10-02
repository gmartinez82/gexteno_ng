
<div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($ins_venta_web_info->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_VENTA_WEB_INFO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_venta_web_info/ins_venta_web_info_alta.php?id=<?php Gral::_echo($ins_venta_web_info->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($ins_venta_web_info->getId()) ?>, 'ins_insumo', 'ins_venta_web_info', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsVentaWebInfo') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_VENTA_WEB_INFO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($ins_venta_web_info->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Titulo') ?>:</label> <label class='dato'><?php Gral::_echo($ins_venta_web_info->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Destacado') ?>:</label> <label class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_venta_web_info->getDestacado())->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Desc Breve') ?>:</label> <label class='dato'><?php Gral::_echo($ins_venta_web_info->getDescripcionBreve()) ?></label><br />
        
    </div>
	
</div>
<script>
setInit();
</script>

