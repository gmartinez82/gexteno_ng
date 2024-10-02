<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_orden_venta = VtaOrdenVenta::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getVtaPresupuesto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getVtaPresupuestoInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getGralTipoIva()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getInsTipoListaPrecio()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Unitario') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getImporteUnitario()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('cantidad') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getCantidad()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('descuento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getDescuento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsInsumoCosto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getInsInsumoCosto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Costo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getImporteCosto()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getVtaPoliticaDescuento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaPoliticaDescuentoRango') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getVtaPoliticaDescuentoRango()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Porc Pol Desc') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getPorcentajePoliticaDescuento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Pol Desc') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getImportePoliticaDescuento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralSucursal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getGralSucursal()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Incl Log') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta->getIncluyeLogistica())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Porc Comis') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getPorcentajeComision()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Comis') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getImporteComision()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Porc Logis') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getPorcentajeLogistica()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Logistica') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getImporteLogistica()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsInsumoBulto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getInsInsumoBulto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cant Bulto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getCantidadBulto()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Desc') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getImporteDescuento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Recargo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getImporteRecargo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getImporte()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_orden_venta->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

