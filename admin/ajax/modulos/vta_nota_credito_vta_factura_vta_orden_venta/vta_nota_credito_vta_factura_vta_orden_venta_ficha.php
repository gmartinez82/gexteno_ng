<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_nota_credito_vta_factura_vta_orden_venta = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaNotaCredito') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getVtaNotaCredito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getVtaFacturaVtaOrdenVenta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsUnidadMedida') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getInsUnidadMedida()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Unitario') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('cantidad') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getCantidad()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_nota_credito_vta_factura_vta_orden_venta->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_orden_venta->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_orden_venta->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

