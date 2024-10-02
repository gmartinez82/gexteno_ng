<div class="pde-modal-top">
    
    <div class="col recepcion-codigo">
        <div class="label"><?php Lang::_lang('Recepc') ?></div>
        <div class="dato"><?php Gral::_echo($pde_recepcion->getId()) ?></div>
    </div>

    <div class="col recepcion-insumo">
        <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
        <div class="dato"><?php Gral::_echo($pde_recepcion->getPrvProveedor()->getDescripcion()) ?>	</div>
    </div>
    
    <div class="col recepcion-insumo">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato"><?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?>	</div>
    </div>

    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('Codigo Int') ?></div>
        <div class="dato"><?php Gral::_echo($pde_recepcion->getInsInsumo()->getCodigoInterno()) ?>	</div>
    </div>
        
    <div class="col recepcion-cantidad">
        <div class="label"><?php Lang::_lang('Cantidad') ?></div>
        <div class="dato"><?php Gral::_echo($pde_recepcion->getCantidad()) ?></div>
    </div>

    <div class="col recepcion-fecha">
        <div class="label"><?php Lang::_lang('Fecha') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoratoWeb($pde_recepcion->getCreado())) ?> hs.</div>
    </div>
    
</div>