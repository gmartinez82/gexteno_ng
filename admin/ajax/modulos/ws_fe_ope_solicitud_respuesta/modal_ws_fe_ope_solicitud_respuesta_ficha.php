<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_ope_solicitud_respuesta = WsFeOpeSolicitudRespuesta::getOxId($id);
//Gral::prr($ws_fe_ope_solicitud_respuesta);
?>

<div class="tabs ficha-ws_fe_ope_solicitud_respuesta" identificador="<?php echo $ws_fe_ope_solicitud_respuesta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_ope_solicitud_respuesta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_ope_solicitud_respuesta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_ope_solicitud_id">
            <div class="label"><?php Lang::_lang('WsFeSolicitud') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitud()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_cuit">
            <div class="label"><?php Lang::_lang('Cuit') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCuit()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_punto_venta">
            <div class="label"><?php Lang::_lang('Punto de Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_tipo_comprobante">
            <div class="label"><?php Lang::_lang('Tipo de Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoComprobante()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_fecha_proceso">
            <div class="label"><?php Lang::_lang('Fecha de Proceso') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipFechaProceso()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_cantidad_registro">
            <div class="label"><?php Lang::_lang('Cantidad de Registros') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCantidadRegistro()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_resultado_cabecera">
            <div class="label"><?php Lang::_lang('Resultado de la Cabecera') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoCabecera()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_reproceso">
            <div class="label"><?php Lang::_lang('Reproceso') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipReproceso()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_tipo_concepto">
            <div class="label"><?php Lang::_lang('Tipo de Concepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoConcepto()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_tipo_documento">
            <div class="label"><?php Lang::_lang('Tipo de Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoDocumento()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_numero_documento">
            <div class="label"><?php Lang::_lang('Numero de Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipNumeroDocumento()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_comprobante_desde">
            <div class="label"><?php Lang::_lang('Comprobante Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_comprobante_hasta">
            <div class="label"><?php Lang::_lang('Comprobante Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_comprobante_fecha">
            <div class="label"><?php Lang::_lang('Comprobante Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteFecha()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_resultado_detalle">
            <div class="label"><?php Lang::_lang('Resultado del Detalle') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoDetalle()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_cae">
            <div class="label"><?php Lang::_lang('Cae') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCae()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta ws_fe_afip_cae_fecha_vencimiento">
            <div class="label"><?php Lang::_lang('Fecha de Vencimiento del CAE') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCaeFechaVencimiento()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ws_fe_ope_solicitud_respuesta->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

