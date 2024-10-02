<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$os_orden_servicio_archivo_id = Gral::getVars(2, 'id');
$os_orden_servicio_archivo = OsOrdenServicioArchivo::getOxId($os_orden_servicio_archivo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_orden_servicio_archivo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_ORDEN_SERVICIO_ARCHIVO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio_archivo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_orden_servicio_archivo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_ORDEN_SERVICIO_ARCHIVO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio_archivo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_orden_servicio_archivo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

