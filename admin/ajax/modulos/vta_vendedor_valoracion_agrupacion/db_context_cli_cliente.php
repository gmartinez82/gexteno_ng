<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_vendedor_valoracion_agrupacion_id = Gral::getVars(2, 'vta_vendedor_valoracion_agrupacion_id');
$vta_vendedor_valoracion_agrupacion = VtaVendedorValoracionAgrupacion::getOxId($vta_vendedor_valoracion_agrupacion_id);
$cli_cliente = $vta_vendedor_valoracion_agrupacion->getCliCliente();

?>
<div class="datos" id="<?php Gral::_echo($cli_cliente->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliCliente') ?>: 
        <strong><?php Gral::_echo($cli_cliente->getId()) ?> - <?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_cliente_alta.php?id=<?php echo($cli_cliente->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCliente') ?>: <strong><?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaVendedorValoracionAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_valoracion_agrupacion->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaVendedorValoracionAgrupacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

