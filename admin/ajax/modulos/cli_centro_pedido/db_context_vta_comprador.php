<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_centro_pedido_id = Gral::getVars(2, 'cli_centro_pedido_id');
$cli_centro_pedido = CliCentroPedido::getOxId($cli_centro_pedido_id);
$vta_comprador = $cli_centro_pedido->getVtaComprador();

?>
<div class="datos" id="<?php Gral::_echo($vta_comprador->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaComprador') ?>: 
        <strong><?php Gral::_echo($vta_comprador->getId()) ?> - <?php Gral::_echo($vta_comprador->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_comprador_alta.php?id=<?php echo($vta_comprador->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComprador') ?>: <strong><?php Gral::_echo($vta_comprador->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliCentroPedido::getFiltrosArrGral() ?>&arr=<?php echo $cli_centro_pedido->getFiltrosArrXCampo('VtaComprador', 'vta_comprador_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliCentroPedidos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_comprador->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

