<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$gral_sucursal_valoracion_agrupacion = GralSucursalValoracionAgrupacion::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Apellido') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getApellido()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nombre') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getNombre()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Email') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getEmail()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Telefono') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getTelefono()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($gral_sucursal_valoracion_agrupacion->getFecha())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralSucursal') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getGralSucursal()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Valoracion') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getValoracion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CliCliente') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getCliCliente()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Session') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getSession()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Navegador') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getNavegador()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('IP') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getIp()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('observacion') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion_agrupacion->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion_agrupacion->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

