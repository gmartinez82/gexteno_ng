<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_centro_pedido_us_usuario_id = Gral::getVars(2, 'pde_centro_pedido_us_usuario_id');
$pde_centro_pedido_us_usuario = PdeCentroPedidoUsUsuario::getOxId($pde_centro_pedido_us_usuario_id);
$pde_centro_pedido = $pde_centro_pedido_us_usuario->getPdeCentroPedido();

?>
<div class="datos" id="<?php Gral::_echo($pde_centro_pedido->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeCentroPedido') ?>: 
        <strong><?php Gral::_echo($pde_centro_pedido->getId()) ?> - <?php Gral::_echo($pde_centro_pedido->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_centro_pedido_alta.php?id=<?php echo($pde_centro_pedido->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedido') ?>: <strong><?php Gral::_echo($pde_centro_pedido->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeCentroPedidoUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido_us_usuario->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeCentroPedidoUsUsuarios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_centro_pedido->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

