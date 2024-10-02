<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$afip_citi_ventas_cbte = AfipCitiVentasCbte::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiPrc()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('AfipCitiCabecera') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCabecera()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiFechaComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Tipo Comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiTipoComprobante()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Punto Venta') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiPuntoVenta()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Nro Comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroComprobante()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nro Comprobante Hasta') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroComprobanteHasta()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo Documento Comprador') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoDocumentoComprador()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nro Identificacion Comprador') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroIdentificacionComprador()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Denominacion Comprador') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiDenominacionComprador()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Total Operacion') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteTotalOperacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Total Conceptos') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteTotalConceptos()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Percepcion No Categorizados') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionNoCategorizados()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Operaciones Exentas') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteOperacionesExentas()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Percepciones Impuestos Nacionales') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesImpuestosNacionales()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Percepciones Ingresos Brutos') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesIngresosBrutos()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Percepciones Impuestos Municipales') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesImpuestosMunicipales()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Impuestos Internos') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteImpuestosInternos()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo Moneda') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoMoneda()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Tipo Cambio') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiTipoCambio()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cantidad Alicuotas Iva') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCantidadAlicuotasIva()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo Operacion') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoOperacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Otros Tributos') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteOtrosTributos()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha Vencimiento Pago') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiFechaVencimientoPago()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaFactura') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getVtaFactura()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaNotaCredito') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getVtaNotaCredito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaNotaDebito') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getVtaNotaDebito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_cbte->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_cbte->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_cbte->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

