<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$os_resolucion_suspension_id = Gral::getVars(2, 'id');
$os_resolucion_suspension = OsResolucionSuspension::getOxId($os_resolucion_suspension_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('OsResolucion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_resolucion_suspension->getOsResolucion()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_resolucion_suspension->getNotaPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_resolucion_suspension->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_RESOLUCION_SUSPENSION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_resolucion_suspension->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_resolucion_suspension->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_RESOLUCION_SUSPENSION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_resolucion_suspension->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_resolucion_suspension->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

