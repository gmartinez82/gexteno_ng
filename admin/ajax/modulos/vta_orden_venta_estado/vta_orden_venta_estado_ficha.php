<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_orden_venta_estado = VtaOrdenVentaEstado::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta_estado->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaOrdenVenta') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta_estado->getVtaOrdenVenta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta_estado->getVtaOrdenVentaTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Inicial') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado->getInicial())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Actual') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado->getActual())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta_estado->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta_estado->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta_estado->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta_estado->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta_estado->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

