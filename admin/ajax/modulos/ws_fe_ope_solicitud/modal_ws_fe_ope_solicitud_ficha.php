<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_ope_solicitud = WsFeOpeSolicitud::getOxId($id);
//Gral::prr($ws_fe_ope_solicitud);
?>

<div class="tabs ficha-ws_fe_ope_solicitud" identificador="<?php echo $ws_fe_ope_solicitud->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_ope_solicitud id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_ope_solicitud descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_param_punto_venta_id">
            <div class="label"><?php Lang::_lang('WsFeParampuntoVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamPuntoVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_param_tipo_comprobante_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoComprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoComprobante()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_param_tipo_concepto_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoConcepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoConcepto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_param_tipo_documento_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_param_tipo_moneda_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoMoneda') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeParamTipoMoneda()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_cantidad_registro">
            <div class="label"><?php Lang::_lang('Cantidad de Registros') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipCantidadRegistro()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_punto_venta">
            <div class="label"><?php Lang::_lang('Punto de Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_tipo_comprobante">
            <div class="label"><?php Lang::_lang('Tipo de Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipTipoComprobante()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_tipo_concepto">
            <div class="label"><?php Lang::_lang('Tipo de Concepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipTipoConcepto()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_tipo_documento">
            <div class="label"><?php Lang::_lang('Tipo de Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipTipoDocumento()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_numero_documento">
            <div class="label"><?php Lang::_lang('Numero de Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipNumeroDocumento()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_comprobante_desde">
            <div class="label"><?php Lang::_lang('Comprobante Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_comprobante_hasta">
            <div class="label"><?php Lang::_lang('Comprobante Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipComprobanteHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_comprobante_fecha">
            <div class="label"><?php Lang::_lang('Comprobante Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipComprobanteFecha()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_importe_total">
            <div class="label"><?php Lang::_lang('Importe Total') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteTotal()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_importe_total_concepto">
            <div class="label"><?php Lang::_lang('Importe Total Concepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteTotalConcepto()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_importe_neto">
            <div class="label"><?php Lang::_lang('Importe Neto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteNeto()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_importe_operacion_exenta">
            <div class="label"><?php Lang::_lang('Importe Operacion Exenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteOperacionExenta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_importe_tributo">
            <div class="label"><?php Lang::_lang('Importe Tributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteTributo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_importe_iva">
            <div class="label"><?php Lang::_lang('Importe Iva') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipImporteIva()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_fecha_servicio_desde">
            <div class="label"><?php Lang::_lang('Fecha de Servicio Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipFechaServicioDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_fecha_servicio_hasta">
            <div class="label"><?php Lang::_lang('Fecha de Servicio Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipFechaServicioHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_vencimiento_pago">
            <div class="label"><?php Lang::_lang('Fecha de Vencimiento de Pago') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipVencimientoPago()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_tipo_moneda">
            <div class="label"><?php Lang::_lang('Tipo de Moneda') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipTipoMoneda()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud ws_fe_afip_cotizacion_moneda">
            <div class="label"><?php Lang::_lang('Cotizacion de Moneda') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getWsFeAfipCotizacionMoneda()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ws_fe_ope_solicitud->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

