<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$afip_citi_compras_cbte = AfipCitiComprasCbte::getOxId($id);
//Gral::prr($afip_citi_compras_cbte);
?>

<div class="tabs ficha-afip_citi_compras_cbte" identificador="<?php echo $afip_citi_compras_cbte->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par afip_citi_compras_cbte id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getId()) ?>
            </div>
        </div>

	
        <div class="par afip_citi_compras_cbte descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_prc_id">
            <div class="label"><?php Lang::_lang('AfipCitiPrc') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiPrc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_cabecera_id">
            <div class="label"><?php Lang::_lang('AfipCitiCabecera') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCabecera()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_fecha_comprobante">
            <div class="label"><?php Lang::_lang('afip_citi_fecha_comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiFechaComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_tipo_comprobante">
            <div class="label"><?php Lang::_lang('afip_citi_tipo_comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiTipoComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_punto_venta">
            <div class="label"><?php Lang::_lang('afip_citi_punto_venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_numero_comprobante">
            <div class="label"><?php Lang::_lang('afip_citi_numero_comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiNumeroComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_despacho_importacion">
            <div class="label"><?php Lang::_lang('afip_citi_despacho_importacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiDespachoImportacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_codigo_documento_vendedor">
            <div class="label"><?php Lang::_lang('afip_citi_codigo_documento_vendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCodigoDocumentoVendedor()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_numero_identificacion_vendedor">
            <div class="label"><?php Lang::_lang('afip_citi_numero_identificacion_vendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiNumeroIdentificacionVendedor()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_denominacion_vendedor">
            <div class="label"><?php Lang::_lang('afip_citi_denominacion_vendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiDenominacionVendedor()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_total_operacion">
            <div class="label"><?php Lang::_lang('afip_citi_importe_total_operacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteTotalOperacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_total_conceptos">
            <div class="label"><?php Lang::_lang('afip_citi_importe_total_conceptos') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteTotalConceptos()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_operaciones_exentas">
            <div class="label"><?php Lang::_lang('afip_citi_importe_operaciones_exentas') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteOperacionesExentas()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_percepciones_iva">
            <div class="label"><?php Lang::_lang('afip_citi_importe_percepciones_iva') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImportePercepcionesIva()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_percepciones_impuestos_nacionales">
            <div class="label"><?php Lang::_lang('afip_citi_importe_percepciones_impuestos_nacionales') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImportePercepcionesImpuestosNacionales()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_percepciones_ingresos_brutos">
            <div class="label"><?php Lang::_lang('afip_citi_importe_percepciones_ingresos_brutos') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImportePercepcionesIngresosBrutos()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_percepciones_impuestos_municipales">
            <div class="label"><?php Lang::_lang('afip_citi_importe_percepciones_impuestos_municipales') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImportePercepcionesImpuestosMunicipales()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_impuestos_internos">
            <div class="label"><?php Lang::_lang('afip_citi_importe_impuestos_internos') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteImpuestosInternos()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_codigo_moneda">
            <div class="label"><?php Lang::_lang('afip_citi_codigo_moneda') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCodigoMoneda()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_tipo_cambio">
            <div class="label"><?php Lang::_lang('afip_citi_tipo_cambio') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiTipoCambio()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_cantidad_alicuotas_iva">
            <div class="label"><?php Lang::_lang('afip_citi_cantidad_alicuotas_iva') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCantidadAlicuotasIva()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_codigo_operacion">
            <div class="label"><?php Lang::_lang('afip_citi_codigo_operacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCodigoOperacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_cf_computable">
            <div class="label"><?php Lang::_lang('afip_citi_importe_cf_computable') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteCfComputable()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_otros_tributos">
            <div class="label"><?php Lang::_lang('afip_citi_importe_otros_tributos') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteOtrosTributos()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_cuit_emisor">
            <div class="label"><?php Lang::_lang('afip_citi_cuit_emisor') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCuitEmisor()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_denominacion_emisor">
            <div class="label"><?php Lang::_lang('afip_citi_denominacion_emisor') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiDenominacionEmisor()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte afip_citi_importe_iva_comision">
            <div class="label"><?php Lang::_lang('afip_citi_importe_iva_comision') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteIvaComision()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte pde_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getPdeNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getOrden()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_cbte estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_cbte->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

