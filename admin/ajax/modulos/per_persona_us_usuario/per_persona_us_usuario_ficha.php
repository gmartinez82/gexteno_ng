<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$per_persona_us_usuario = PerPersonaUsUsuario::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PerPersona') ?></div>
        <div class='dato'><?php Gral::_echo($per_persona_us_usuario->getPerPersona()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
        <div class='dato'><?php Gral::_echo($per_persona_us_usuario->getUsUsuario()->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_us_usuario->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($per_persona_us_usuario->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_us_usuario->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($per_persona_us_usuario->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

