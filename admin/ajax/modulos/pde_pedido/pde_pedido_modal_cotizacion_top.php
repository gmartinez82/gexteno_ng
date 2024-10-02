<div class="pde-modal-top" pedido_id="<?php Gral::_echo($pde_pedido->getId()) ?>">
    
    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('Pedido') ?></div>
        <div class="dato"><?php Gral::_echo($pde_pedido->getId()) ?></div>
    </div>

    <div class="col pedido-insumo">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato"><?php Gral::_echo($pde_pedido->getInsInsumo()->getDescripcion()) ?>	</div>
    </div>

    <div class="col pedido-cantidad">
        <div class="label"><?php Lang::_lang('Cantidad') ?></div>
        <div class="dato"><?php Gral::_echo($pde_pedido->getCantidad()) ?></div>
    </div>

    <div class="col pedido-fecha">
        <div class="label"><?php Lang::_lang('Fecha') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoratoWeb($pde_pedido->getCreado())) ?> hs.</div>
    </div>

    <div class="col pedido-vencimiento">
        <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechatoWeb($pde_pedido->getVencimiento())) ?></div>
    </div>
    
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_GESTION_COTIZACION_AGREGAR')){ ?>
    <div class="col agregar-cotizacion">
        <a href="#"><img src="imgs/btn_add.gif" width="25" alt="agregar" title="Agregar Cotizacion"></a>
    </div>
    <?php } ?>
    
</div>