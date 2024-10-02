<div class="modal-top">
    
    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('Codigo') ?></div>
        <div class="dato"><?php Gral::_echo($pde_orden_pago->getCodigo()) ?></div>
    </div>

    <div class="col pedido-fecha">
        <div class="label"><?php Lang::_lang('Fecha Emision') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoratoWeb($pde_orden_pago->getCreado())) ?></div>
    </div>

    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
        <div class="dato"><?php Gral::_echo($pde_orden_pago->getPrvProveedor()->getDescripcion()) ?></div>
    </div>
    
</div>