<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$app_mov_instalacion_id = Gral::getVars(2, 'app_mov_instalacion_id');
$app_mov_instalacion = AppMovInstalacion::getOxId($app_mov_instalacion_id);
$app_mov_version = $app_mov_instalacion->getAppMovVersion();

?>
<div class="datos" id="<?php Gral::_echo($app_mov_version->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AppMovVersion') ?>: 
        <strong><?php Gral::_echo($app_mov_version->getId()) ?> - <?php Gral::_echo($app_mov_version->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="app_mov_version_alta.php?id=<?php echo($app_mov_version->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AppMovVersion') ?>: <strong><?php Gral::_echo($app_mov_version->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AppMovInstalacion::getFiltrosArrGral() ?>&arr=<?php echo $app_mov_instalacion->getFiltrosArrXCampo('AppMovVersion', 'app_mov_version_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AppMovInstalacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($app_mov_version->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

