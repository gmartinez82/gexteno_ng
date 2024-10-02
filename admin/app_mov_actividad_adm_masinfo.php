<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$app_mov_actividad_id = Gral::getVars(2, 'id');
$app_mov_actividad = AppMovActividad::getOxId($app_mov_actividad_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Activ') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaHoraToWeb($app_mov_actividad->getFechaActividad()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Token') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($app_mov_actividad->getToken())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Respuesta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($app_mov_actividad->getRespuesta())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($app_mov_actividad->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'APP_MOV_ACTIVIDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_actividad->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($app_mov_actividad->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'APP_MOV_ACTIVIDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_actividad->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($app_mov_actividad->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

