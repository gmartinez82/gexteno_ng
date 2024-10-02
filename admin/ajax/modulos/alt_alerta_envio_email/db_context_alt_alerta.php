<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$alt_alerta_envio_email_id = Gral::getVars(2, 'alt_alerta_envio_email_id');
$alt_alerta_envio_email = AltAlertaEnvioEmail::getOxId($alt_alerta_envio_email_id);
$alt_alerta = $alt_alerta_envio_email->getAltAlerta();

?>
<div class="datos" id="<?php Gral::_echo($alt_alerta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AltAlerta') ?>: 
        <strong><?php Gral::_echo($alt_alerta->getId()) ?> - <?php Gral::_echo($alt_alerta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="alt_alerta_alta.php?id=<?php echo($alt_alerta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltAlerta') ?>: <strong><?php Gral::_echo($alt_alerta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AltAlertaEnvioEmail::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta_envio_email->getFiltrosArrXCampo('AltAlerta', 'alt_alerta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AltAlertaEnvioEmails') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($alt_alerta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

