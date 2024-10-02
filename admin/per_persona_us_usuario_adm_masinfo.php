<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$per_persona_us_usuario_id = Gral::getVars(2, 'id');
$per_persona_us_usuario = PerPersonaUsUsuario::getOxId($per_persona_us_usuario_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_PERSONA_US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_us_usuario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_persona_us_usuario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_PERSONA_US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_us_usuario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_persona_us_usuario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

