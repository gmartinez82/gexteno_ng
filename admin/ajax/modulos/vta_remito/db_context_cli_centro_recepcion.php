<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_remito_id = Gral::getVars(2, 'vta_remito_id');
$vta_remito = VtaRemito::getOxId($vta_remito_id);
$cli_centro_recepcion = $vta_remito->getCliCentroRecepcion();

?>
<div class="datos" id="<?php Gral::_echo($cli_centro_recepcion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliCentroRecepcion') ?>: 
        <strong><?php Gral::_echo($cli_centro_recepcion->getId()) ?> - <?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_centro_recepcion_alta.php?id=<?php echo($cli_centro_recepcion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCentroRecepcion') ?>: <strong><?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaRemito::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito->getFiltrosArrXCampo('CliCentroRecepcion', 'cli_centro_recepcion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaRemitos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

