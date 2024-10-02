<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$alt_alerta_us_usuario = AltAlertaUsUsuario::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Alerta') ?></div>
        <div class='dato'><?php Gral::_echo($alt_alerta_us_usuario->getAltAlerta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Usuario') ?></div>
        <div class='dato'><?php Gral::_echo($alt_alerta_us_usuario->getUsUsuario()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getObservado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Leido') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getLeido())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Destacado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getDestacado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Aviso Email') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getAvisoEmail())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Aviso Sms') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getAvisoSms())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta_us_usuario->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($alt_alerta_us_usuario->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

