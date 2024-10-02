<?php
include "_autoload.php";

$pedido_id = Gral::getVars(2, 'pedido_id', 0);
$pde_pedido = new PdePedido();
if ($pedido_id != 0) {
    $pde_pedido = PdePedido::getOxId($pedido_id);
}
$pde_pedido->setPdePedidoLeido();
//$pde_pedido->setPdePedidoDestinatarios();

$pde_estados = $pde_pedido->getPdeEstados();
$pde_ocs = $pde_pedido->getPdeOcs();
$pde_recepcions = $pde_pedido->getPdeRecepcions();

$prv_proveedores = $pde_pedido->getPrvProveedorsXPdePedidoPrvProveedor();
//$ins_marcas = $pde_pedido->getInsMarcasXPdePedidoInsMarca();
//PdePedidoDestinatario::enviarEmailsPendientes();
?>
<div class="tabs">
    <?php include "pde_pedido_modal_top.php" ?>
    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>
        <li><a href="#tab_estados"><?php Lang::_lang('Estados del Pedido') ?></a></li>        
        <li><a href="#tab_oc"><?php Lang::_lang('Orden de Compra') ?></a></li>        
        <li><a href="#tab_recepciones"><?php Lang::_lang('Recepciones') ?></a></li>        
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_pedido_ficha_general.php" ?>
    </div>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_pedido_ficha_estados.php" ?>
    </div>        

    <!-- Tab Oc -->
    <div id="tab_oc" class="datos">
        <?php include "modal_pedido_ficha_oc.php" ?>
    </div>        

    <!-- Tab Recepciones -->
    <div id="tab_recepciones" class="datos">
        <?php include "modal_pedido_ficha_recepciones.php" ?>
    </div>        

</div>