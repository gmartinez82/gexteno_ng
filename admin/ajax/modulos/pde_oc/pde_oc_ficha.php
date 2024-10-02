<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pde_oc = PdeOc::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdePedido') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdePedido()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeCotizacion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdeCotizacion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPrvProveedor()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeOcAgrupacion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdeOcAgrupacion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdeCentroPedido()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdeCentroRecepcion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeOcTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeOcTipoEstadoRecepcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeOcTipoOrigen') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPdeOcTipoOrigen()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cantidad') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getCantidad()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Entrega') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getFechaEntrega())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Unidad') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getImporteUnidad()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Total') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getImporteTotal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Vencimiento') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PrvInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPrvInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PrvInsumoCosto') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPrvInsumoCosto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Esperado') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getImporteEsperado()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Afecta Costo') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pde_oc->getAfectaCosto())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPrvDescuentoFinanciero()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PrvDescuentoComercial') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getPrvDescuentoComercial()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getNotaPublica()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getNotaInterna()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pde_oc->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

