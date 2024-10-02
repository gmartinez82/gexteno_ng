
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ws_fe_ope_solicitud->getId() ?>" modulo="ws_fe_ope_solicitud">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($ws_fe_ope_solicitud->getDescripcion()) ?>
    </div>
    <?php if (count($ws_fe_ope_solicitud->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ws_fe_ope_solicitud->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="ws_fe_param_punto_venta_id <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamPuntoVenta()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamPuntoVenta()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ws_fe_param_tipo_comprobante_id <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoComprobante()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoComprobante()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ws_fe_param_tipo_concepto_id <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoConcepto()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoConcepto()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ws_fe_param_tipo_documento_id <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoDocumento()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoDocumento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ws_fe_param_tipo_moneda_id <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoMoneda()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoMoneda()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_empresa_id <?php Gral::_echo($ws_fe_ope_solicitud->getGralEmpresa()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud->getGralEmpresa()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_cantidad_registro">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipCantidadRegistro()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_punto_venta">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipPuntoVenta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_tipo_comprobante">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipTipoComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_tipo_concepto">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipTipoConcepto()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_tipo_documento">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipTipoDocumento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_numero_documento">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipNumeroDocumento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_comprobante_desde">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_comprobante_hasta">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipComprobanteHasta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_comprobante_fecha">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipComprobanteFecha()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_importe_total">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteTotal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_importe_total_concepto">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteTotalConcepto()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_importe_neto">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteNeto()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_importe_operacion_exenta">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteOperacionExenta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_importe_tributo">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteTributo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_importe_iva">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteIva()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_fecha_servicio_desde">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipFechaServicioDesde()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_fecha_servicio_hasta">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipFechaServicioHasta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_vencimiento_pago">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipVencimientoPago()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_tipo_moneda">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipTipoMoneda()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_cotizacion_moneda">
            <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipCotizacionMoneda()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ws_fe_ope_solicitud_alta.php?id=<?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ws_fe_ope_solicitud->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ws_fe_ope_solicitud/ws_fe_ope_solicitud_db_context_acciones.php?id=<?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>' modulo_metodo_init="setInitWsFeOpeSolicitud()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


