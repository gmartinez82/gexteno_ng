
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $afip_citi_compras_cbte->getId() ?>" modulo="afip_citi_compras_cbte">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($afip_citi_compras_cbte->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($afip_citi_compras_cbte->getDescripcion()) ?>
    </div>
    <?php if (count($afip_citi_compras_cbte->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($afip_citi_compras_cbte->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($afip_citi_compras_cbte->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afip_citi_prc_id <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiPrc()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiPrc()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afip_citi_cabecera_id <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCabecera()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCabecera()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_fecha_comprobante">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiFechaComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_tipo_comprobante">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiTipoComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_punto_venta">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiPuntoVenta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_numero_comprobante">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiNumeroComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_despacho_importacion">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiDespachoImportacion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_codigo_documento_vendedor">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCodigoDocumentoVendedor()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_numero_identificacion_vendedor">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiNumeroIdentificacionVendedor()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_denominacion_vendedor">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiDenominacionVendedor()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_total_operacion">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteTotalOperacion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_total_conceptos">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteTotalConceptos()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_operaciones_exentas">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteOperacionesExentas()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_percepciones_iva">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImportePercepcionesIva()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_percepciones_impuestos_nacionales">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImportePercepcionesImpuestosNacionales()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_percepciones_ingresos_brutos">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImportePercepcionesIngresosBrutos()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_percepciones_impuestos_municipales">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImportePercepcionesImpuestosMunicipales()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_impuestos_internos">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteImpuestosInternos()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_codigo_moneda">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCodigoMoneda()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_tipo_cambio">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiTipoCambio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_cantidad_alicuotas_iva">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCantidadAlicuotasIva()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_codigo_operacion">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCodigoOperacion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_cf_computable">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteCfComputable()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_otros_tributos">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteOtrosTributos()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_cuit_emisor">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiCuitEmisor()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_denominacion_emisor">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiDenominacionEmisor()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_iva_comision">
            <?php Gral::_echo($afip_citi_compras_cbte->getAfipCitiImporteIvaComision()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_factura_id <?php Gral::_echo($afip_citi_compras_cbte->getPdeFactura()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_cbte->getPdeFactura()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_nota_credito_id <?php Gral::_echo($afip_citi_compras_cbte->getPdeNotaCredito()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_cbte->getPdeNotaCredito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_nota_debito_id <?php Gral::_echo($afip_citi_compras_cbte->getPdeNotaDebito()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_cbte->getPdeNotaDebito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_CBTE_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='afip_citi_compras_cbte_alta.php?id=<?php Gral::_echo($afip_citi_compras_cbte->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_CBTE_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($afip_citi_compras_cbte->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_CBTE_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($afip_citi_compras_cbte->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_CBTE_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/afip_citi_compras_cbte/afip_citi_compras_cbte_db_context_acciones.php?id=<?php Gral::_echo($afip_citi_compras_cbte->getId()) ?>' modulo_metodo_init="setInitAfipCitiComprasCbte()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


