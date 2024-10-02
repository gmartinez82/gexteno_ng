<div class="par">
    <div class="label"><?php Lang::_lang('Cantidad de Items'); ?></div>
    <div class="dato">
        <?php Gral::_echo(count($pdi_pedidos)); ?>
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang('Estado Actual'); ?></div>
    <div class="dato">
        <img src='imgs/pdi_pedido_agrupacion_estado/<?php Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getCodigo()) ?>.png' width="10" align='absmiddle' />
        <?php Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getDescripcion()) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang('Usuario'); ?></div>
    <div class="dato">
        <?php Gral::_echo($pdi_pedido_agrupacion->getCreadoPorDescripcion()) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang('Panol Origen'); ?></div>
    <div class="dato">
        <?php Gral::_echo($pan_panol_origen->getDescripcion()) ?><br />
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang('Panol Destino'); ?></div>
    <div class="dato">
        <?php Gral::_echo($pan_panol_destino->getDescripcion()) ?><br />
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang('Observaciones'); ?></div>
    <div class="dato">
        <?php Gral::_echo($pdi_pedido_agrupacion->getObservacion()); ?>        	
    </div>
</div>