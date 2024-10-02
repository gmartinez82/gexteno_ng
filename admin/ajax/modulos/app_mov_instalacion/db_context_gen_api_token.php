<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$app_mov_instalacion_id = Gral::getVars(2, 'app_mov_instalacion_id');
$app_mov_instalacion = AppMovInstalacion::getOxId($app_mov_instalacion_id);
$gen_api_token = $app_mov_instalacion->getGenApiToken();

?>
<div class="datos" id="<?php Gral::_echo($gen_api_token->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenApiToken') ?>: 
        <strong><?php Gral::_echo($gen_api_token->getId()) ?> - <?php Gral::_echo($gen_api_token->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_api_token_alta.php?id=<?php echo($gen_api_token->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenApiToken') ?>: <strong><?php Gral::_echo($gen_api_token->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AppMovInstalacion::getFiltrosArrGral() ?>&arr=<?php echo $app_mov_instalacion->getFiltrosArrXCampo('GenApiToken', 'gen_api_token_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AppMovInstalacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_api_token->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

