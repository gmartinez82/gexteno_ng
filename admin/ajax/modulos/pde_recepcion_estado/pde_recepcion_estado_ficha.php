<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pde_recepcion_estado = PdeRecepcionEstado::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeRecepcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion_estado->getPdeRecepcion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeRecepcionTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion_estado->getPdeRecepcionTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion_estado->getPdeCentroRecepcion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PanPanol') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion_estado->getPanPanol()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cantidad') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion_estado->getCantidad()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Inicial') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_estado->getInicial())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Actual') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_estado->getActual())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion_estado->getObservacion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_estado->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion_estado->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_estado->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion_estado->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

