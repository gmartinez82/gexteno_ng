<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_info_sifen_id = Gral::getVars(2, 'cli_cliente_info_sifen_id');
$cli_cliente_info_sifen = CliClienteInfoSifen::getOxId($cli_cliente_info_sifen_id);
$cli_cliente = $cli_cliente_info_sifen->getCliCliente();

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
        <a href="_init.php?arr_gral=<?php echo CliClienteInfoSifen::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_info_sifen->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClienteInfoSifens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

