<div class="pde-modal-top">
    
    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('PdeOC') ?></div>
        <div class="dato"><?php Gral::_echo($pde_oc_agrupacion->getCodigo()) ?></div>
    </div>

    <div class="col pedido-insumo">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato"><?php Gral::_echo($pde_oc_agrupacion->getInsInsumo()->getDescripcion()) ?>	</div>
    </div>

    <div class="col pedido-cantidad">
        <div class="label"><?php Lang::_lang('Cantidad') ?></div>
        <div class="dato"><?php Gral::_echo($pde_oc_agrupacion->getCantidad()) ?></div>
    </div>

    <div class="col pedido-fecha">
        <div class="label"><?php Lang::_lang('Fecha') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoratoWeb($pde_oc_agrupacion->getCreado())) ?> hs.</div>
    </div>

    <div class="col pedido-vencimiento">
        <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechatoWeb($pde_oc_agrupacion->getVencimiento())) ?></div>
    </div>
    
</div>