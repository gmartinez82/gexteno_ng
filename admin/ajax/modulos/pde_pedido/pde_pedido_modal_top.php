<div class="pde-modal-top" pedido_id="<?php Gral::_echo($pde_pedido->getId()) ?>">
    
    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('Pedido') ?></div>
        <div class="dato"><?php Gral::_echo($pde_pedido->getId()) ?></div>
    </div>

    <div class="col pedido-insumo">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato"><?php Gral::_echo($pde_pedido->getInsInsumo()->getDescripcion()) ?>	</div>
    </div>

    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('Codigo Int') ?></div>
        <div class="dato"><?php Gral::_echo($pde_pedido->getInsInsumo()->getCodigoInterno()) ?>	</div>
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
    
</div>