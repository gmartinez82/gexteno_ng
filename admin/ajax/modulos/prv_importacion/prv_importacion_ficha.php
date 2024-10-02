<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$prv_importacion = PrvImportacion::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getPrvImportacionTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getPrvProveedor()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsMarca') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getInsMarca()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Marca Pieza') ?></div>
        <div class='dato'><?php Gral::_echo(($prv_importacion->getInsMarcaPieza() != 'null') ? InsMarca::getOxId($prv_importacion->getInsMarcaPieza())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Conv Desc') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getPrvConvenioDescuento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Desc') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getDescuento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cant T1') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getCantidadTab1()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cant T2') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getCantidadTab2()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cant T3') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getCantidadTab3()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cant T4') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getCantidadTab4()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Sel Todos') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($prv_importacion->getSeleccionarTodos())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Sel Todos Desc') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($prv_importacion->getSeleccionarTodosDescripcion())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($prv_importacion->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

