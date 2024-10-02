<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPresupuesto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getGralTipoIva()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsListaPrecio') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getInsListaPrecio()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Unitario') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getImporteUnitario()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('cantidad') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidad()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('descuento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getDescuento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Conflicto') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_ins_insumo->getConflicto())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsInsumoCosto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumoCosto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Costo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getImporteCosto()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPoliticaDescuento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPoliticaDescuentoRango') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPoliticaDescuentoRango()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Porc Pol Desc') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajePoliticaDescuento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Pol Desc') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getImportePoliticaDescuento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Porc Comis') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajeComision()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Comis') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getImporteComision()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsInsumoBulto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumoBulto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cant Bulto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidadBulto()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Desc Bulto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getImporteDescuentoBulto()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Porc Descuento Bulto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajeDescuentoBulto()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_ins_insumo->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_ins_insumo->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_ins_insumo->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto_ins_insumo->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

