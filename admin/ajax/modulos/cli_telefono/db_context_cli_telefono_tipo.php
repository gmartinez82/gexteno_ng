<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_telefono_id = Gral::getVars(2, 'cli_telefono_id');
$cli_telefono = CliTelefono::getOxId($cli_telefono_id);
$cli_telefono_tipo = $cli_telefono->getCliTelefonoTipo();

?>
<div class="datos" id="<?php Gral::_echo($cli_telefono_tipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliTelefonoTipo') ?>: 
        <strong><?php Gral::_echo($cli_telefono_tipo->getId()) ?> - <?php Gral::_echo($cli_telefono_tipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_telefono_tipo_alta.php?id=<?php echo($cli_telefono_tipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliTelefonoTipo') ?>: <strong><?php Gral::_echo($cli_telefono_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliTelefono::getFiltrosArrGral() ?>&arr=<?php echo $cli_telefono->getFiltrosArrXCampo('CliTelefonoTipo', 'cli_telefono_tipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliTelefonos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_telefono_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

