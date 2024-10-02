<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_comision_vta_factura = VtaComisionVtaFactura::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaComision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getVtaComision()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaFactura') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getVtaFactura()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Base Comisionable') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getBaseComisionable()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Afectado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getImporteAfectado()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Porc Comision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getPorcentajeComision()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Comision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getImporteComision()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_comision_vta_factura->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_vta_factura->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

