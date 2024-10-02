<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$us_mensaje_id = Gral::getVars(2, 'us_mensaje_id');
$us_mensaje = UsMensaje::getOxId($us_mensaje_id);
$us_usuario = $us_mensaje->getUsUsuario();

?>
<div class="datos" id="<?php Gral::_echo($us_usuario->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('UsUsuario') ?>: 
        <strong><?php Gral::_echo($us_usuario->getId()) ?> - <?php Gral::_echo($us_usuario->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="us_usuario_alta.php?id=<?php echo($us_usuario->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsUsuario') ?>: <strong><?php Gral::_echo($us_usuario->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo UsMensaje::getFiltrosArrGral() ?>&arr=<?php echo $us_mensaje->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('UsMensajes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($us_usuario->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

