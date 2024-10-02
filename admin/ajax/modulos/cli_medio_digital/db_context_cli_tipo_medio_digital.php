<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_medio_digital_id = Gral::getVars(2, 'cli_medio_digital_id');
$cli_medio_digital = CliMedioDigital::getOxId($cli_medio_digital_id);
$cli_tipo_medio_digital = $cli_medio_digital->getCliTipoMedioDigital();

?>
<div class="datos" id="<?php Gral::_echo($cli_tipo_medio_digital->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliTipoMedioDigital') ?>: 
        <strong><?php Gral::_echo($cli_tipo_medio_digital->getId()) ?> - <?php Gral::_echo($cli_tipo_medio_digital->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_tipo_medio_digital_alta.php?id=<?php echo($cli_tipo_medio_digital->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliTipoMedioDigital') ?>: <strong><?php Gral::_echo($cli_tipo_medio_digital->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliMedioDigital::getFiltrosArrGral() ?>&arr=<?php echo $cli_medio_digital->getFiltrosArrXCampo('CliTipoMedioDigital', 'cli_tipo_medio_digital_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliMedioDigitals') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_tipo_medio_digital->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

