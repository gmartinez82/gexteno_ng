<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$app_mov_version_id = Gral::getVars(2, 'app_mov_version_id');
$app_mov_version = AppMovVersion::getOxId($app_mov_version_id);
$app_mov_modulo = $app_mov_version->getAppMovModulo();

?>
<div class="datos" id="<?php Gral::_echo($app_mov_modulo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AppMovModulo') ?>: 
        <strong><?php Gral::_echo($app_mov_modulo->getId()) ?> - <?php Gral::_echo($app_mov_modulo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="app_mov_modulo_alta.php?id=<?php echo($app_mov_modulo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AppMovModulo') ?>: <strong><?php Gral::_echo($app_mov_modulo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AppMovVersion::getFiltrosArrGral() ?>&arr=<?php echo $app_mov_version->getFiltrosArrXCampo('AppMovModulo', 'app_mov_modulo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AppMovVersions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($app_mov_modulo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

