<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$app_mov_actividad_id = Gral::getVars(2, 'app_mov_actividad_id');
$app_mov_actividad = AppMovActividad::getOxId($app_mov_actividad_id);
$app_mov_instalacion = $app_mov_actividad->getAppMovInstalacion();

?>
<div class="datos" id="<?php Gral::_echo($app_mov_instalacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AppMovInstalacion') ?>: 
        <strong><?php Gral::_echo($app_mov_instalacion->getId()) ?> - <?php Gral::_echo($app_mov_instalacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="app_mov_instalacion_alta.php?id=<?php echo($app_mov_instalacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AppMovInstalacion') ?>: <strong><?php Gral::_echo($app_mov_instalacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AppMovActividad::getFiltrosArrGral() ?>&arr=<?php echo $app_mov_actividad->getFiltrosArrXCampo('AppMovInstalacion', 'app_mov_instalacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AppMovActividads') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($app_mov_instalacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

