<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_pedido_enviado_id = Gral::getVars(2, 'pde_pedido_enviado_id');
$pde_pedido_enviado = PdePedidoEnviado::getOxId($pde_pedido_enviado_id);
$pde_pedido = $pde_pedido_enviado->getPdePedido();

?>
<div class="datos" id="<?php Gral::_echo($pde_pedido->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdePedido') ?>: 
        <strong><?php Gral::_echo($pde_pedido->getId()) ?> - <?php Gral::_echo($pde_pedido->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_pedido_alta.php?id=<?php echo($pde_pedido->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedido') ?>: <strong><?php Gral::_echo($pde_pedido->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdePedidoEnviado::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_enviado->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdePedidoEnviados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_pedido->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

