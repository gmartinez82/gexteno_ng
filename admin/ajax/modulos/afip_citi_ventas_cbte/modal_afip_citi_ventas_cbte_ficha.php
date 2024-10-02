<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$afip_citi_ventas_cbte = AfipCitiVentasCbte::getOxId($id);
//Gral::prr($afip_citi_ventas_cbte);
?>

<div class="tabs ficha-afip_citi_ventas_cbte" identificador="<?php echo $afip_citi_ventas_cbte->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par afip_citi_ventas_cbte id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getId()) ?>
            </div>
        </div>

	
        <div class="par afip_citi_ventas_cbte descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_prc_id">
            <div class="label"><?php Lang::_lang('AfipCitiPrc') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiPrc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_cabecera_id">
            <div class="label"><?php Lang::_lang('AfipCitiCabecera') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCabecera()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_fecha_comprobante">
            <div class="label"><?php Lang::_lang('Fecha Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiFechaComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_tipo_comprobante">
            <div class="label"><?php Lang::_lang('Tipo Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiTipoComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_punto_venta">
            <div class="label"><?php Lang::_lang('Punto Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_numero_comprobante">
            <div class="label"><?php Lang::_lang('Nro Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_numero_comprobante_hasta">
            <div class="label"><?php Lang::_lang('Nro Comprobante Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroComprobanteHasta()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_codigo_documento_comprador">
            <div class="label"><?php Lang::_lang('Codigo Documento Comprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoDocumentoComprador()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_numero_identificacion_comprador">
            <div class="label"><?php Lang::_lang('Nro Identificacion Comprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroIdentificacionComprador()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_denominacion_comprador">
            <div class="label"><?php Lang::_lang('Denominacion Comprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiDenominacionComprador()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_total_operacion">
            <div class="label"><?php Lang::_lang('Importe Total Operacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteTotalOperacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_total_conceptos">
            <div class="label"><?php Lang::_lang('Importe Total Conceptos') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteTotalConceptos()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_percepcion_no_categorizados">
            <div class="label"><?php Lang::_lang('Importe Percepcion No Categorizados') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionNoCategorizados()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_operaciones_exentas">
            <div class="label"><?php Lang::_lang('Importe Operaciones Exentas') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteOperacionesExentas()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_percepciones_impuestos_nacionales">
            <div class="label"><?php Lang::_lang('Importe Percepciones Impuestos Nacionales') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesImpuestosNacionales()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_percepciones_ingresos_brutos">
            <div class="label"><?php Lang::_lang('Importe Percepciones Ingresos Brutos') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesIngresosBrutos()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_percepciones_impuestos_municipales">
            <div class="label"><?php Lang::_lang('Importe Percepciones Impuestos Municipales') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesImpuestosMunicipales()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_impuestos_internos">
            <div class="label"><?php Lang::_lang('Importe Impuestos Internos') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteImpuestosInternos()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_codigo_moneda">
            <div class="label"><?php Lang::_lang('Codigo Moneda') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoMoneda()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_tipo_cambio">
            <div class="label"><?php Lang::_lang('Tipo Cambio') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiTipoCambio()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_cantidad_alicuotas_iva">
            <div class="label"><?php Lang::_lang('Cantidad Alicuotas Iva') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCantidadAlicuotasIva()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_codigo_operacion">
            <div class="label"><?php Lang::_lang('Codigo Operacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoOperacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_importe_otros_tributos">
            <div class="label"><?php Lang::_lang('Importe Otros Tributos') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteOtrosTributos()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte afip_citi_fecha_vencimiento_pago">
            <div class="label"><?php Lang::_lang('Fecha Vencimiento Pago') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiFechaVencimientoPago()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte vta_factura_id">
            <div class="label"><?php Lang::_lang('VtaFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getVtaFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte vta_nota_credito_id">
            <div class="label"><?php Lang::_lang('VtaNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getVtaNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte vta_nota_debito_id">
            <div class="label"><?php Lang::_lang('VtaNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getVtaNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getOrden()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_cbte estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_cbte->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

