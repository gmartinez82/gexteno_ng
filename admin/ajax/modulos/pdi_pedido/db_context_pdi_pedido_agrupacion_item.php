<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pdi_pedido_id = Gral::getVars(2, 'pdi_pedido_id');
$pdi_pedido = PdiPedido::getOxId($pdi_pedido_id);
$pdi_pedido_agrupacion_item = $pdi_pedido->getPdiPedidoAgrupacionItem();

?>
<div class="datos" id="<?php Gral::_echo($pdi_pedido_agrupacion_item->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdiPedidoAgrupacionItem') ?>: 
        <strong><?php Gral::_echo($pdi_pedido_agrupacion_item->getId()) ?> - <?php Gral::_echo($pdi_pedido_agrupacion_item->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pdi_pedido_agrupacion_item_alta.php?id=<?php echo($pdi_pedido_agrupacion_item->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoAgrupacionItem') ?>: <strong><?php Gral::_echo($pdi_pedido_agrupacion_item->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdiPedido::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido->getFiltrosArrXCampo('PdiPedidoAgrupacionItem', 'pdi_pedido_agrupacion_item_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdiPedidos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pdi_pedido_agrupacion_item->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

