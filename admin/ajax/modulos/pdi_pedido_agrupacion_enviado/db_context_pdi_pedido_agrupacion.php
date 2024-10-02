<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pdi_pedido_agrupacion_enviado_id = Gral::getVars(2, 'pdi_pedido_agrupacion_enviado_id');
$pdi_pedido_agrupacion_enviado = PdiPedidoAgrupacionEnviado::getOxId($pdi_pedido_agrupacion_enviado_id);
$pdi_pedido_agrupacion = $pdi_pedido_agrupacion_enviado->getPdiPedidoAgrupacion();

?>
<div class="datos" id="<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdiPedidoAgrupacion') ?>: 
        <strong><?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?> - <?php Gral::_echo($pdi_pedido_agrupacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pdi_pedido_agrupacion_alta.php?id=<?php echo($pdi_pedido_agrupacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?>: <strong><?php Gral::_echo($pdi_pedido_agrupacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdiPedidoAgrupacionEnviado::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_agrupacion_enviado->getFiltrosArrXCampo('PdiPedidoAgrupacion', 'pdi_pedido_agrupacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdiPedidoAgrupacionEnviados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pdi_pedido_agrupacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

