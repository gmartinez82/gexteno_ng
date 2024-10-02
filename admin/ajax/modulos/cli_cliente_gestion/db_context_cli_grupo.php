<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_id = Gral::getVars(2, 'cli_cliente_id');
$cli_cliente = CliCliente::getOxId($cli_cliente_id);
$cli_grupo = $cli_cliente->getCliGrupo();

?>
<div class="datos" id="<?php Gral::_echo($cli_grupo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliGrupo') ?>: 
        <strong><?php Gral::_echo($cli_grupo->getId()) ?> - <?php Gral::_echo($cli_grupo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_grupo_alta.php?id=<?php echo($cli_grupo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliGrupo') ?>: <strong><?php Gral::_echo($cli_grupo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente->getFiltrosArrXCampo('CliGrupo', 'cli_grupo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClientes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_grupo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

