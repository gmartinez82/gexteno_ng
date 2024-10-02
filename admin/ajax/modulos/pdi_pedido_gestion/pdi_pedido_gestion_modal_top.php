<div class="pdi-modal-top">
    
    <div class="col pedido-origen">
        <img src='imgs/icn_<?php echo $pdi_pedido->getPdiTipoOrigen()->getCodigo() ?>.png' width='22' alt="<?php echo $pdi_pedido->getPdiTipoOrigen()->getCodigo() ?>" align='absmiddle' title="<?php Gral::_echo($pdi_pedido->getPdiOrigenTooltip()) ?>" />
    </div>

    <div class="col pedido-codigo">
        <div class="label"><?php Lang::_lang('Pedido') ?></div>
        <div class="dato"><?php Gral::_echo($pdi_pedido->getId()) ?></div>
    </div>

    <div class="col pedido-panol">
        <div class="label"><?php Lang::_lang('Solicitante') ?></div>
        <div class="dato"><?php Gral::_echo(PanPanol::getOxId($pdi_pedido->getPanPanolOrigen())->getDescripcion()) ?></div>
    </div>

    <div class="col pedido-panol">
        <div class="label"><?php Lang::_lang('Solicita a') ?></div>
        <div class="dato"><?php Gral::_echo(($pdi_pedido->getPanPanolDestino() != 'null') ? PanPanol::getOxId($pdi_pedido->getPanPanolDestino())->getDescripcion() : '') ?></div>
    </div>

    <div class="col pedido-insumo">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato"><?php Gral::_echo($pdi_pedido->getInsInsumo()->getDescripcion()) ?>	</div>
    </div>

    <?php if($pdi_pedido->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_GENERADO)){ // automaticos ?>
    <div class="col pedido-cantidad">
        <div class="label"><?php Lang::_lang('Cantidad') ?></div>
        <div class="dato"><?php Gral::_echo($pdi_pedido->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_GENERADO)->getCantidad()) ?></div>
    </div>
    
    <div class="col pedido-fecha">
        <div class="label"><?php Lang::_lang('Fecha') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoratoWeb($pdi_pedido->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_GENERADO)->getFechahora())) ?> hs.</div>
    </div>
    <?php  }?>
    
    <?php if($pdi_pedido->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_SOLICITADO)){ // panoleros ?>
    <div class="col pedido-cantidad">
        <div class="label"><?php Lang::_lang('Cantidad') ?></div>
        <div class="dato"><?php Gral::_echo($pdi_pedido->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_SOLICITADO)->getCantidad()) ?></div>
    </div>
    
    <div class="col pedido-fecha">
        <div class="label"><?php Lang::_lang('Fecha') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoratoWeb($pdi_pedido->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_SOLICITADO)->getFechahora())) ?> hs.</div>
    </div>
    <?php  }?>
        
</div>