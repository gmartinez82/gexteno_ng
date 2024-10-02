<div class="pde-modal-top">
    
    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('Cotiz') ?></div>
        <div class="dato"><?php Gral::_echo($pde_cotizacion->getId()) ?></div>
    </div>

    <div class="col pedido-insumo">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato"><?php Gral::_echo($pde_cotizacion->getInsInsumo()->getDescripcion()) ?>	</div>
    </div>

    <div class="col pedido-cantidad">
        <div class="label"><?php Lang::_lang('Cantidad') ?></div>
        <div class="dato"><?php Gral::_echo($pde_cotizacion->getCantidad()) ?></div>
    </div>

    <div class="col pedido-fecha">
        <div class="label"><?php Lang::_lang('Fecha') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoratoWeb($pde_cotizacion->getCreado())) ?> hs.</div>
    </div>

    <div class="col pedido-vencimiento">
        <div class="label"><?php Lang::_lang('Entrega') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechatoWeb($pde_cotizacion->getFechaEntrega())) ?></div>
    </div>
    
</div>