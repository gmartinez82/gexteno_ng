<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_cli_rubro_id = Gral::getVars(2, 'cli_cliente_cli_rubro_id');
$cli_cliente_cli_rubro = CliClienteCliRubro::getOxId($cli_cliente_cli_rubro_id);
$cli_rubro = $cli_cliente_cli_rubro->getCliRubro();

?>
<div class="datos" id="<?php Gral::_echo($cli_rubro->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliRubro') ?>: 
        <strong><?php Gral::_echo($cli_rubro->getId()) ?> - <?php Gral::_echo($cli_rubro->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_rubro_alta.php?id=<?php echo($cli_rubro->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliRubro') ?>: <strong><?php Gral::_echo($cli_rubro->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliClienteCliRubro::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_cli_rubro->getFiltrosArrXCampo('CliRubro', 'cli_rubro_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClienteCliRubros') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_rubro->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

