<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$os_orden_servicio = OsOrdenServicio::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('OsTipo') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getOsTipo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PerPersona') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getPerPersona()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('OsPrioridad') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getOsPrioridad()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('OsTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getOsTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Notificacion') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getNotificacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Not Mec') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($os_orden_servicio->getNotificacionMecano())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFecha())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha Hecho') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaHecho())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Notif') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificacion())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Dias Descargo') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getDiasParaDescargo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Limite Descargo') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteDescargo())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha Descargo') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaDescargo())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Noti sin Descargo') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificadoSinDescargo())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha Limite Resolucion') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteResolucion())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Resolucion') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaResolucion())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($os_orden_servicio->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($os_orden_servicio->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($os_orden_servicio->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

