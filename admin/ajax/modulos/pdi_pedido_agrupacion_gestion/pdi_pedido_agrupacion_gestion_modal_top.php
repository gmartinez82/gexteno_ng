<div class="pde-modal-top">
    
    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('PdiPedido') ?></div>
        <div class="dato"><?php Gral::_echo($pdi_pedido_agrupacion->getCodigo()) ?></div>
    </div>

    <div class="col pedido-insumo">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato"><?php //Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionItem()->getInsInsumo()->getDescripcion()) ?>	</div>
    </div>

    <div class="col pedido-cantidad">
        <div class="label"><?php Lang::_lang('Cantidad') ?></div>
        <div class="dato"><?php //Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionItem()->getCantidad()) ?></div>
    </div>

</div>