<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Num Compr"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Tipo Compr"); ?></td>

        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Imp Neto"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Imp Iva"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Imp Concepto"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Imp Tributo"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Imp Exento"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Imp Total"); ?></td>

        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Tipo Compr"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Num Compr"); ?></td>

        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cant Reg"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Res Cab"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Res Det"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Cae"); ?></td>
    </tr>
    <?php

    $ws_fe_ope_solicituds = $pde_nota_debito->getWsFeOpeSolicitudsXPdeNotaDebitoWsFeOpeSolicitud();

    $cont = 0;
    foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {

        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        $ws_fe_ope_solicitud_respuesta = $ws_fe_ope_solicitud->getWsFeOpeSolicitudRespuesta();
        $ws_fe_ope_solicitud_respuesta_observacions = $ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitudRespuestaObservacions();
        $ws_fe_ope_solicitud_comprobante_asociado = $ws_fe_ope_solicitud->getWsFeOpeSolicitudComprobanteAsociado();
        $ws_fe_ope_solicitud_ivas = $ws_fe_ope_solicitud->getWsFeOpeSolicitudIvas();
        $ws_fe_ope_solicitud_tributos = $ws_fe_ope_solicitud->getWsFeOpeSolicitudTributos();

        // ---------------------------------------------------------------------
        // Valores a imprimir
        // ---------------------------------------------------------------------
        $ws_fe_param_tipo_comprobante_codigo = $ws_fe_ope_solicitud->getWsFeAfipTipoComprobante();
        $ws_fe_param_tipo_comprobante = WsFeParamTipoComprobante::getOxCodigoAfip($ws_fe_param_tipo_comprobante_codigo);

        $ws_fe_afip_comprobante_desde = $ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde();
        $ws_fe_afip_comprobante_fecha = $ws_fe_ope_solicitud->getWsFeAfipComprobanteFecha();

        $ws_fe_afip_importe_neto = $ws_fe_ope_solicitud->getWsFeAfipImporteNeto();
        $ws_fe_afip_importe_iva = $ws_fe_ope_solicitud->getWsFeAfipImporteIva();
        $ws_fe_afip_importe_concepto = $ws_fe_ope_solicitud->getWsFeAfipImporteTotalConcepto();
        $ws_fe_afip_importe_tributo = $ws_fe_ope_solicitud->getWsFeAfipImporteTributo();
        $ws_fe_afip_importe_operacion_exenta = $ws_fe_ope_solicitud->getWsFeAfipImporteOperacionExenta();
        $ws_fe_afip_importe_total = $ws_fe_ope_solicitud->getWsFeAfipImporteTotal();

        $ws_fe_afip_respuesta_tipo_comprobante_id = $ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoComprobante();
        $ws_fe_afip_respuesta_tipo_comprobante = WsFeParamTipoComprobante::getOxCodigoAfip($ws_fe_afip_respuesta_tipo_comprobante_id);

        $ws_fe_afip_respuesta_comprobante_desde = $ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteDesde();
        $ws_fe_afip_respuesta_fecha_proceso = $ws_fe_ope_solicitud_respuesta->getWsFeAfipFechaProceso();

        $ws_fe_afip_respuesta_cantidad_registro = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCantidadRegistro();
        $ws_fe_afip_respuesta_resultado_cabecera = $ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoCabecera();
        $ws_fe_afip_respuesta_resultado_detalle = $ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoDetalle();
        $ws_fe_afip_respuesta_cae = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCae();
        $ws_fe_afip_respuesta_cae_fecha_vencimiento = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCaeFechaVencimiento();
        ?>

        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="numero-comprobante-solicitud">
                    <?php Gral::_echo('#' . $ws_fe_afip_comprobante_desde) ?>
                </div>
                <div class="fecha-comprobante-solicitud">
                    <?php Gral::_echo(Gral::getFechaToWeb($ws_fe_ope_solicitud->getFechaDesdeAfip($ws_fe_afip_comprobante_fecha))) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="tipo-comprobante-solicitud">
                    <?php Gral::_echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-neto">
                    <?php Gral::_echoImp($ws_fe_afip_importe_neto) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-iva">
                    <?php Gral::_echoImp($ws_fe_afip_importe_iva) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-concepto">
                    <?php Gral::_echoImp($ws_fe_afip_importe_concepto) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-tributo">
                    <?php Gral::_echoImp($ws_fe_afip_importe_tributo) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-exento">
                    <?php Gral::_echoImp($ws_fe_afip_importe_operacion_exenta) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-total">
                    <?php Gral::_echoImp($ws_fe_afip_importe_total) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="tipo-comprobante-respuesta">
                    <?php Gral::_echo($ws_fe_afip_respuesta_tipo_comprobante->getDescripcion()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="numero-comprobante-respuesta">
                    <?php Gral::_echo('#' . $ws_fe_afip_respuesta_comprobante_desde) ?>
                </div>
                <div class="fecha-comprobante-respuesta">
                    <?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud->getFechaDesdeAfip($ws_fe_afip_respuesta_fecha_proceso))) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="cantida-registro">	
                    <?php Gral::_echo($ws_fe_afip_respuesta_cantidad_registro) ?>
                </div>
            </td>


            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="resultado-cabecera">	
                    <?php Gral::_echo($ws_fe_afip_respuesta_resultado_cabecera) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="resultado-detalle">	
                    <?php Gral::_echo($ws_fe_afip_respuesta_resultado_detalle) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="cae">	
                    <?php Gral::_echo($ws_fe_afip_respuesta_cae) ?>
                </div>
                <div class="cae-fecha-vencimiento">	
                    <?php Gral::_echo(Gral::getFechaToWEB($ws_fe_ope_solicitud->getFechaDesdeAfip($ws_fe_afip_respuesta_cae_fecha_vencimiento))) ?>
                </div>
            </td>
        </tr>
        <?php foreach ($ws_fe_ope_solicitud_respuesta_observacions as $ws_fe_ope_solicitud_respuesta_observacion) { ?>
            <tr>
                <td colspan="2" class="adm_tbl_encabezado" align='center'>
                    <?php Lang::_lang("Codigo"); ?>
                </td>
                <td colspan="12" class="adm_tbl_encabezado" align='center'>
                    <?php Lang::_lang("Observacion"); ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"  align='center'>
                    <?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta_observacion->getWsFeAfipCodigo()) ?>
                </td>
                <td colspan="12"  align='left'>
                    <?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta_observacion->getWsFeAfipMensaje()) ?>
                </td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>