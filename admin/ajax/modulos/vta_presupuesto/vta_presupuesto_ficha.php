<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_presupuesto = VtaPresupuesto::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CliCliente') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getCliCliente()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaVendedor()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaComprador') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaComprador()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPreventista') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaPreventista()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralActividad') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getGralActividad()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralEscenario') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getGralEscenario()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getGralFpFormaPago()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralFpCuota') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getGralFpCuota()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getInsTipoListaPrecio()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPresupuestoTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPresupuestoTipoEmision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEmision()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getGralTipoDocumento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Persona Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Persona Documento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getPersonaDocumento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Persona Email') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getPersonaEmail()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFecha())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha de Vencimiento') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaVencimiento())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Entrega') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaEntrega())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha de Recordatorio') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaRecordatorio())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Subtotal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getImporteSubtotal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Descuento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getImporteDescuento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Pol Desc') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getImportePoliticaDescuento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Recargo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getImporteRecargo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Total') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getImporteTotal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cant Items') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getCantidadItems()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Recargo %') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getRecargo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getNotaInterna()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Nota de Recordaorio') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getNotaRecordatorio()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralSucursal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getGralSucursal()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Incl Log') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getIncluyeLogistica())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Porc Logis') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getPorcentajeLogistica()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Logistica') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getImporteLogistica()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Destacado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getDestacado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_presupuesto->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

