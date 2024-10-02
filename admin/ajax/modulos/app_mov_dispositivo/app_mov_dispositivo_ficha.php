<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$app_mov_dispositivo = AppMovDispositivo::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('S.O. Descr') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getSoDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('S.O. Version') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getSoVersion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Marca') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getMarca()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modelo') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getModelo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('IMEI') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getImei()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Telefono Nro') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getTelefonoNro()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Titular Apellido') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getTitularApellido()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Titular Nombre') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getTitularNombre()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_dispositivo->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_dispositivo->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($app_mov_dispositivo->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

