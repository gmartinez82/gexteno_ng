<div class="par">
    <div class="label"><?php Lang::_lang('Categoria') ?></div>
    <div class="dato">
        <?php Gral::_echo($pde_pedido->getInsInsumo()->getInsCategoria()->getDescripcion()) ?>        	
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Insumo') ?></div>
    <div class="dato">
        <?php Gral::_echo($pde_pedido->getInsInsumo()->getDescripcion()) ?>        	
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Cantidad') ?></div>
    <div class="dato">
        <?php Gral::_echo($pde_pedido->getCantidad()) ?>        	
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_pedido->getVencimiento())) ?>        	
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Estado Actual') ?></div>
    <div class="dato">
        <img src='imgs/pde_estado/<?php Gral::_echo($pde_pedido->getPdeEstadoActual()->getPdeTipoEstado()->getCodigo()) ?>.png' width="10" align='absmiddle' />
        <?php Gral::_echo($pde_pedido->getPdeEstadoActual()->getPdeTipoEstado()->getDescripcion()) ?>        	
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Usuario') ?></div>
    <div class="dato">
        <?php Gral::_echo($pde_pedido->getCreadoPorDescripcion()) ?>        	
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Proveedores') ?></div>
    <div class="dato">
        <?php foreach ($prv_proveedores as $prv_proveedor) { ?>
            <?php
            $pde_pedido_destinatario = $pde_pedido->getPdePedidoDestinatarioXProveedor($prv_proveedor);
            $pde_pedido_prv_proveedor_avisados = $pde_pedido->getPdePedidoPrvProveedorAvisadosXProveedor($prv_proveedor);
            //Gral::prr($pde_pedido_destinatario);
            ?>
            <div class="uno proveedor destinatario" id="div_uno_destinatario_<?php echo ($pde_pedido_destinatario) ? $pde_pedido_destinatario->getId() : '' ?>" proveedor_id="<?php echo $prv_proveedor->getId() ?>" pedido_destinatario_id="<?php echo ($pde_pedido_destinatario) ? $pde_pedido_destinatario->getId() : '' ?>">
                <?php include "pde_pedido_destinatario_uno.php" ?>
            </div>        
        <?php } ?>
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Comentarios a Proveedor') ?></div>
    <div class="dato">
        <?php Gral::_echo($pde_pedido->getComentarioProveedor()) ?>        	
    </div>
</div>

<div class="par">
    <div class="label"><?php Lang::_lang('Observaciones') ?></div>
    <div class="dato">
        <?php Gral::_echo($pde_pedido->getObservacion()) ?>        	
    </div>
</div>
