
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($pde_centro_pedido_email->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_ALTA_VINCULO_PDE_CENTRO_PEDIDO_EMAIL_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_centro_pedido_email/pde_centro_pedido_email_alta.php?id=<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>, 'pde_centro_pedido', 'pde_centro_pedido_email', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedidoEmail') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_ALTA_VINCULO_PDE_CENTRO_PEDIDO_EMAIL_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($pde_centro_pedido_email->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echo($pde_centro_pedido_email->getObservacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

