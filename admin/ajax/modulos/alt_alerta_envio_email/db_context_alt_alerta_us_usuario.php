<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$alt_alerta_envio_email_id = Gral::getVars(2, 'alt_alerta_envio_email_id');
$alt_alerta_envio_email = AltAlertaEnvioEmail::getOxId($alt_alerta_envio_email_id);
$alt_alerta_us_usuario = $alt_alerta_envio_email->getAltAlertaUsUsuario();

?>
<div class="datos" id="<?php Gral::_echo($alt_alerta_us_usuario->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AltAlertaUsUsuario') ?>: 
        <strong><?php Gral::_echo($alt_alerta_us_usuario->getId()) ?> - <?php Gral::_echo($alt_alerta_us_usuario->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="alt_alerta_us_usuario_alta.php?id=<?php echo($alt_alerta_us_usuario->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltAlertaUsUsuario') ?>: <strong><?php Gral::_echo($alt_alerta_us_usuario->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AltAlertaEnvioEmail::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta_envio_email->getFiltrosArrXCampo('AltAlertaUsUsuario', 'alt_alerta_us_usuario_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AltAlertaEnvioEmails') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($alt_alerta_us_usuario->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

