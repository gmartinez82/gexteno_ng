
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $afip_citi_ventas_cbte->getId() ?>" modulo="afip_citi_ventas_cbte">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($afip_citi_ventas_cbte->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($afip_citi_ventas_cbte->getDescripcion()) ?>
    </div>
    <?php if (count($afip_citi_ventas_cbte->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($afip_citi_ventas_cbte->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != '') { ?>
                    <div class="descripcion-extendida-uno <?php echo $i ?> ">
                        <div class="par">
                            <div class="label">
                                <?php Gral::_echo($arr_descripcion_extendida['label']) ?>            
                            </div>
                            <div class="dato">
                                <?php Gral::_echo($arr_descripcion_extendida['dato']) ?>            
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>                

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($afip_citi_ventas_cbte->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afip_citi_prc_id <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiPrc()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiPrc()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afip_citi_cabecera_id <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCabecera()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCabecera()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_fecha_comprobante">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiFechaComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_tipo_comprobante">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiTipoComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_punto_venta">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiPuntoVenta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_numero_comprobante">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_numero_comprobante_hasta">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroComprobanteHasta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_codigo_documento_comprador">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoDocumentoComprador()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_numero_identificacion_comprador">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiNumeroIdentificacionComprador()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_denominacion_comprador">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiDenominacionComprador()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_total_operacion">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteTotalOperacion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_total_conceptos">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteTotalConceptos()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_percepcion_no_categorizados">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionNoCategorizados()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_operaciones_exentas">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteOperacionesExentas()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_percepciones_impuestos_nacionales">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesImpuestosNacionales()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_percepciones_ingresos_brutos">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesIngresosBrutos()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_percepciones_impuestos_municipales">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesImpuestosMunicipales()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_impuestos_internos">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteImpuestosInternos()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_codigo_moneda">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoMoneda()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_tipo_cambio">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiTipoCambio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_cantidad_alicuotas_iva">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCantidadAlicuotasIva()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_codigo_operacion">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiCodigoOperacion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_otros_tributos">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiImporteOtrosTributos()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_fecha_vencimiento_pago">
            <?php Gral::_echo($afip_citi_ventas_cbte->getAfipCitiFechaVencimientoPago()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_factura_id <?php Gral::_echo($afip_citi_ventas_cbte->getVtaFactura()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_ventas_cbte->getVtaFactura()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_nota_credito_id <?php Gral::_echo($afip_citi_ventas_cbte->getVtaNotaCredito()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_ventas_cbte->getVtaNotaCredito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_nota_debito_id <?php Gral::_echo($afip_citi_ventas_cbte->getVtaNotaDebito()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_ventas_cbte->getVtaNotaDebito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='afip_citi_ventas_cbte_alta.php?id=<?php Gral::_echo($afip_citi_ventas_cbte->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($afip_citi_ventas_cbte->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($afip_citi_ventas_cbte->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/afip_citi_ventas_cbte/afip_citi_ventas_cbte_db_context_acciones.php?id=<?php Gral::_echo($afip_citi_ventas_cbte->getId()) ?>' modulo_metodo_init="setInitAfipCitiVentasCbte()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


