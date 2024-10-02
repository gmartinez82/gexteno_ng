<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_id = Gral::getVars(2, 'cli_cliente_id');
$cli_cliente = CliCliente::getOxId($cli_cliente_id);
$cli_tipo_cliente = $cli_cliente->getCliTipoCliente();

?>
<div class="datos" id="<?php Gral::_echo($cli_tipo_cliente->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliTipoCliente') ?>: 
        <strong><?php Gral::_echo($cli_tipo_cliente->getId()) ?> - <?php Gral::_echo($cli_tipo_cliente->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_tipo_cliente_alta.php?id=<?php echo($cli_tipo_cliente->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliTipoCliente') ?>: <strong><?php Gral::_echo($cli_tipo_cliente->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente->getFiltrosArrXCampo('CliTipoCliente', 'cli_tipo_cliente_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClientes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_tipo_cliente->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

