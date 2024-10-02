<?php
$arr_vacio[0]['cod'] = '';
$arr_vacio[0]['descripcion'] = '...';
$presupuesto_estado_terminal = $vta_presupuesto->getVtaPresupuestoTipoEstadoActualTerminal();
$cli_cliente = $vta_presupuesto->getCliCliente();
$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();

$vta_preventistas_cmb = Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(true), '...');
$vta_presupuesto_tipo_ventas_cmb = Gral::getCmbFiltro(VtaPresupuestoTipoVenta::getVtaPresupuestoTipoVentasCmb(true), '...');
$vta_presupuesto_tipo_despachos_cmb = Gral::getCmbFiltro(VtaPresupuestoTipoDespacho::getVtaPresupuestoTipoDespachosCmb(true), '...');
$vta_compradors_cmb = Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(true), '...');
$ins_tipo_lista_precios_cmb = InsTipoListaPrecio::getInsTipoListaPreciosCmb(true);
$gral_tipo_documentos_cmb = Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(true), '...');
$gral_actividads_cmb = Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(true), '...');

$existe_cliente = false;
if ($cli_cliente->getId() != 'null') {
    $existe_cliente = true;

    $vta_preventistas_cmb = $cli_cliente->getVtaPreventistasCmb();
    $vta_compradors_cmb = $cli_cliente->getVtaCompradorsCmb();
    $ins_tipo_lista_precios_cmb = $cli_cliente->getInsTipoListaPreciosCmb();

    if (count($vta_preventistas_cmb) == 0) {
        $vta_preventistas_cmb = Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...');
    }

    if (count($vta_compradors_cmb) == 0) {
        $vta_compradors_cmb = Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...');
    }

    if (count($ins_tipo_lista_precios_cmb) == 0) {
        $ins_tipo_lista_precios_cmb = InsTipoListaPrecio::getInsTipoListaPreciosCmb();
    }
}

// -----------------------------------------------------------------------------
// se determina si hay conflicto
// -----------------------------------------------------------------------------
$hay_aprobacion_parcial = false;
$hay_conflicto_general = false;
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
    $hay_conflicto = $vta_presupuesto_ins_insumo->setControlVtaPresupuestoConflicto();

    if ($hay_conflicto) {
        $hay_conflicto_general = true;
    }

    // se determina si hay aprobacion parcial
    $vta_orden_venta = $vta_presupuesto_ins_insumo->getVtaOrdenVenta();
    if ($vta_orden_venta) {
        $hay_aprobacion_parcial = true;
    }
}
// -----------------------------------------------------------------------------

$gral_actividad_id = $vta_presupuesto->getGralActividadId();
$gral_escenario_id = $vta_presupuesto->getGralEscenarioId();
$vta_presupuesto_tipo_venta_id = $vta_presupuesto->getVtaPresupuestoTipoVentaId();
$vta_presupuesto_tipo_despacho_id = $vta_presupuesto->getVtaPresupuestoTipoDespachoId();
$gral_sucursal_retiro = $vta_presupuesto->getGralSucursalRetiro();

// -------------------------------------------------------------------------
// se determina el escenario de acuerdo al vendedor
// -------------------------------------------------------------------------    
if ($gral_escenario_id == 'null') {
    $gral_escenario = $vta_vendedor_autenticado->getGralEscenarioXVtaVendedorGralEscenario();
    if ($gral_escenario) {
        $gral_escenario_id = $gral_escenario->getId();
        $gral_actividad = $gral_escenario->getGralActividad();
        $gral_actividad_id = $gral_actividad->getId();
    }
}

// -------------------------------------------------------------------------
// se determina el tipo de venta por default
// -------------------------------------------------------------------------    
if ($vta_presupuesto_tipo_venta_id == 'null') {
    $vta_presupuesto_tipo_venta = VtaPresupuestoTipoVenta::getOxCodigo(VtaPresupuestoTipoVenta::TIPO_VENTA_A);
    if ($vta_presupuesto_tipo_venta) {
        $vta_presupuesto_tipo_venta_id = $vta_presupuesto_tipo_venta->getId();
    }
}

// -------------------------------------------------------------------------
// se determina el tipo de despacho por default
// -------------------------------------------------------------------------    
if ($vta_presupuesto_tipo_despacho_id == 'null') {
    //$vta_presupuesto_tipo_despacho = VtaPresupuestoTipoDespacho::getOxCodigo(VtaPresupuestoTipoDespacho::TIPO_RETIRO_SUCURSAL);
    //if ($vta_presupuesto_tipo_despacho) {
    //    $vta_presupuesto_tipo_despacho_id = $vta_presupuesto_tipo_despacho->getId();
    //}
}

?>

<?php if ($vta_presupuesto) { ?>

    <?php if ($mensaje_confirmacion) { ?>
        <div class="mensaje-confirmacion guardado-ok">
            Se ha guardado correctamente el presupuesto
        </div>
    <?php } ?>

    <div class="label-error label-error-general" id="error_general_error"></div>

    <div class="col c1">

        <div class="par">
            <div class="label"><?php Gral::_echo("Cod Presupuesto") ?>: </div>
            <div class="dato codigo-presupuesto">
                <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
                <div class="label-error" id="vta_presupuesto_codigo_error"></div>
            </div>
        </div>

        <?php if (!$hay_aprobacion_parcial) { ?>
            <div class="par">
                <div class="label">
                    <?php Lang::_lang('Cliente'); ?>
                </div>
                <div class="dato">
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_cli_cliente', 'ajax/modulos/vta_presupuesto_gestion/cli_cliente_dbsuggest_presupuesto_custom.php', false, true, true, 'Ingrese ...', $cli_cliente->getId(), $cli_cliente->getDescripcion()) ?>
                    <div id="dbsug_cli_cliente_id_error" class="label-error" ><?php Gral::_echo($dbsug_cli_cliente_id_error) ?></div>   
                </div>
            </div>
        <?php } else { ?>
            <div class="par">
                Al haber sido aprobado parcialmente no puede modificarse el cliente.
                <input type="hidden" id="dbsug_cli_cliente_id" name="dbsug_cli_cliente_id" value="<?php echo $cli_cliente->getId() ?>">
            </div>
        <?php } ?>

        <div id="bloque_vta_presupuesto_gestion_pie_datos_cliente">
            <?php include 'bloque_vta_presupuesto_gestion_pie_datos_cliente.php'; ?>  
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Comentarios para el Cliente") ?>: </div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='45' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($vta_presupuesto->getObservacion()) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="par" style="display: none;">
            <div class="label"><?php Gral::_echo("Vendedor Externo") ?>: </div>
            <div class="dato">
                <?php
                $vta_preventista_id = $vta_presupuesto->getVtaPreventistaId();
                Html::html_dib_select(1, 'cmb_vta_preventista_id', $vta_preventistas_cmb, $vta_preventista_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_preventista_id_error"></div>
            </div>
        </div>

    </div>

    <div class="col c2">

        <div class="par">
            <div class="label"><?php Gral::_echoTxt("Fecha del Presupuesto") ?>: </div>
            <div class="dato">
                <input type="text" id="txt_fecha_presupuesto" name="txt_fecha_presupuesto" class="textbox date" size="6" value="<?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFecha())) ?>" />
                <input type="button" id="cal_txt_fecha_presupuesto" value=" ... ">
                <div class="label-error" id="txt_fecha_presupuesto_error"></div>
            </div>

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_fecha_presupuesto', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_presupuesto'
                });
            </script>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echoTxt("Fecha de Vencimiento") ?>: </div>
            <div class="dato">
                <input type="text" id="txt_fecha_vencimiento" name="txt_fecha_vencimiento" class="textbox date" size="6" value="<?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFechaVencimiento())) ?>" />
                <input type="button" id="cal_txt_fecha_vencimiento" value=" ... ">
                <div class="label-error" id="txt_fecha_vencimiento_error"></div>
            </div>

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_vencimiento'
                });
            </script>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Actividad") ?>: </div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_gral_actividad_id', $gral_actividads_cmb, $gral_actividad_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_actividad_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Escenario") ?>: </div>
            <div class="dato">
                <?php
                //$gral_escenario_id = $vta_presupuesto->getGralEscenarioId();

                $c = new Criterio();
                $c->add(GralEscenario::GEN_ATTR_GRAL_ACTIVIDAD_ID, $gral_actividad_id, Criterio::IGUAL);
                $c->addTabla(GralEscenario::GEN_TABLA);
                $c->setCriterios();

                Html::html_dib_select(1, 'cmb_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmbF(null, $c), '...'), $gral_escenario_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_escenario_id_error"></div>
            </div>
        </div>

        <div class="par" style="display: none;">
            <div class="label"><?php Gral::_echoTxt("Fecha de Entrega") ?>: </div>
            <div class="dato">
                <input type="text" id="txt_fecha_entrega" name="txt_fecha_entrega" class="textbox date" size="6" value="<?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFechaEntrega())) ?>" />
                <input type="button" id="cal_txt_fecha_entrega" value=" ... ">
                <div class="label-error" id="txt_fecha_entrega_error"></div>
            </div>

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_entrega'
                });
            </script>
        </div>

        <div class="par" style="display: none;">
            <div class="label"><?php Gral::_echoTxt("Recordatorio") ?>: </div>
            <div class="dato">
                <input type="text" id="txt_fecha_recordatorio" name="txt_fecha_recordatorio" class="textbox date" size="6" value="<?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFechaRecordatorio())) ?>" />
                <input type="button" id="cal_txt_fecha_recordatorio" value=" ... ">
                <div class="label-error" id="txt_fecha_recordatorio_error"></div>
            </div>

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_fecha_recordatorio', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_recordatorio'
                });
            </script>
        </div>

        <div class="par" style="display: none;">
            <div class="label"><?php Gral::_echo("Comentarios Recordatorio") ?>: </div>
            <div class="dato">
                <textarea name='txa_nota_recordatorio' rows='3' cols='45' id='txa_nota_recordatorio' class='textbox'><?php Gral::_echoTxt($vta_presupuesto->getNotaRecordatorio()) ?></textarea>
                <div class="label-error" id="txa_nota_recordatorio_error"></div>
            </div>
        </div>

        <div class="par" style="display: none;">
            <div class="label"><?php Gral::_echo("Comprador") ?>: </div>
            <div class="dato">
                <?php
                $vta_comprador_id = $vta_presupuesto->getVtaCompradorId();
                Html::html_dib_select(1, 'cmb_vta_comprador_id', $vta_compradors_cmb, $vta_comprador_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_comprador_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Tipo") ?>: </div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_vta_presupuesto_tipo_venta_id', $vta_presupuesto_tipo_ventas_cmb, $vta_presupuesto_tipo_venta_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_presupuesto_tipo_venta_id_error"></div>
            </div>
        </div>
        
    </div>

    <div class="col c3">

        <div class="par">
            <div class="label"><?php Gral::_echo("Lista de Precios") ?>: </div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()); ?>
                <?php
                if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_CAMBIAR_LISTA_PRECIO')) {
                    $ins_tipo_lista_precio_id = $vta_presupuesto->getInsTipoListaPrecioId();
                    Html::html_dib_select(1, 'cmb_ins_tipo_lista_precio_id', $ins_tipo_lista_precios_cmb, $ins_tipo_lista_precio_id, 'textbox ' . $error_input_css);
                }
                ?>
                <div class="label-error" id="cmb_ins_tipo_lista_precio_id_error"></div>
            </div>
            <?php if ($ins_tipo_lista_precio->getImporteMinimo() > 0) { ?>
                <div class="dato label-minimo-lista-precio">
                    Mínimo <?php Gral::_echoImp($ins_tipo_lista_precio->getImporteMinimo()) ?>
                </div>
            <?php } ?>
        </div>

        <?php if ($ins_tipo_lista_precio->getIncluyeLogistica()) { ?>
            <div class="par">
                <div class="label"><?php Gral::_echo("Incluye Logistica") ?>: </div>
                <div class="dato">
                    SI Incluye logistica
                </div>
            </div>
        <?php } else { ?>
            <div class="par">
                <div class="label"><?php Gral::_echo("Incluye Logistica") ?>: </div>
                <div class="dato">
                    NO - Adicional hasta <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeLogistica()) ?>%
                </div>
            </div>
        <?php } ?>

        <?php if (!$ins_tipo_lista_precio->getIncluyeLogistica()) { ?>
            <div class="par">
                <div class="label"><?php Gral::_echo("Incluir Logistica") ?>: </div>
                <div class="dato">
                    <?php
                    $ins_tipo_lista_precio_id = $vta_presupuesto->getInsTipoListaPrecioId();
                    Html::html_dib_select(1, 'cmb_incluir_logistica', GralSiNo::getGralSiNosParaPorcentajeLogisticaCmb($vta_presupuesto->getInsTipoListaPrecio()->getPorcentajeLogistica()), $vta_presupuesto->getPorcentajeLogistica(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_incluir_logistica_error"></div>
                </div>
            </div>
        <?php } ?>

        <div class="par">
            <div class="label"><?php Gral::_echo("Forma de Pago") ?>: </div>
            <div class="dato">
                <?php
                $gral_fp_forma_pago_id = $vta_presupuesto->getGralFpFormaPagoId();
                Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $gral_fp_forma_pago_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_fp_forma_pago_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Medio de Pago") ?>: </div>
            <div class="dato">
                <?php
                $gral_fp_medio_pago_id = $vta_presupuesto->getGralFpMedioPagoId();

                $c = new Criterio();
                $c->add(GralFpMedioPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $gral_fp_forma_pago_id, Criterio::IGUAL);
                $c->addTabla(GralFpMedioPago::GEN_TABLA);
                $c->setCriterios();

                Html::html_dib_select(1, 'cmb_gral_fp_medio_pago_id', Gral::getCmbFiltro(GralFpMedioPago::getGralFpMedioPagosCmbF(null, $c), '...'), $gral_fp_medio_pago_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_fp_medio_pago_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Cuotas") ?>: </div>
            <div class="dato">
                <?php
                $gral_fp_cuota_id = $vta_presupuesto->getGralFpCuotaId();

                $c = new Criterio();
                $c->add(GralFpCuota::GEN_ATTR_GRAL_FP_MEDIO_PAGO_ID, $gral_fp_medio_pago_id, Criterio::IGUAL);
                $c->addTabla(GralFpCuota::GEN_TABLA);
                $c->addOrden(GralFpCuota::GEN_ATTR_DESCRIPCION);
                $c->addOrden(GralFpCuota::GEN_ATTR_ORDEN);
                $c->setCriterios();

                Html::html_dib_select(1, 'cmb_gral_fp_cuota_id', Gral::getCmbFiltro(GralFpCuota::getGralFpCuotasCmbF(null, $c), '...'), $gral_fp_cuota_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_fp_cuota_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Nota Interna") ?>: </div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='3' cols='45' id='txa_nota_interna' class='textbox'><?php Gral::_echoTxt($vta_presupuesto->getNotaInterna()) ?></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
            </div>
        </div>

    </div>

    <div class="col c4">
        <?php include 'bloque_vta_presupuesto_gestion_edicion_pie_totales.php'; ?>
    </div>


<?php } ?>
<div class="botonera general">
    <button type="button" class="boton" id="btn_presupuesto_volver_buscador" name="btn_presupuesto_volver_buscador">Volver al Buscador</button>
    <?php if ($vta_presupuesto) { ?>

        <?php if ($vta_presupuesto->getEstado()) { ?>
            <a href="ajax/modulos/vta_presupuesto_gestion/pdf_presupuesto.php?vta_presupuesto_id=<?php echo $vta_presupuesto->getId() ?>" target="_blank">
                <button type="button" class="boton" id="btn_presupuesto_ver_comprobante" name="btn_presupuesto_ver_comprobante">Ver Comprobante PDF</button>
            </a>
            <button type="button" class="boton" id="btn_presupuesto_enviar_presupuesto" name="btn_presupuesto_enviar_presupuesto">Enviar Presupuesto</button>
        <?php } ?>

        <?php if (!$presupuesto_estado_terminal) { ?>
            <button type="button" class="boton" id="btn_presupuesto_guardar_presupuesto" name="btn_presupuesto_guardar_presupuesto">Guardar Presupuesto</button>
        <?php } ?>
    <?php } ?>
</div>

    <?php if ($cli_cliente->getId() != 'null') { ?>
    <?php
    $arr_mensajes_alerta_ctacte_cliente = $cli_cliente->getArrMensajesAlertaCtacteCliente();
    if (count($arr_mensajes_alerta_ctacte_cliente) > 0) {
        ?>
        <div class="mensaje-alerta">
            <div class="mensaje-alerta-titulo">
                Alerta de Cta Cte de Clientes
            </div>

            <div class="mensaje-alerta-datos">
                <?php foreach ($arr_mensajes_alerta_ctacte_cliente as $arr_mensaje_alerta_ctacte_cliente) { ?>
                    <div class="mensaje-alerta-uno <?php Gral::_echo($arr_mensaje_alerta_ctacte_cliente['tipo']) ?>">
                        
                        <?php if($arr_mensaje_alerta_ctacte_cliente['tipo'] == 'resumen' || $arr_mensaje_alerta_ctacte_cliente['tipo'] == 'resumen-con-detalle'){ ?>
                            <img src="<?php echo Gral::getPathHttp() ?>admin/imgs/icn_alerta.png" width="18" alt="alerta" />
                        <?php } ?>
                        
                        <?php Gral::_echo($arr_mensaje_alerta_ctacte_cliente['descripcion']) ?>
                    </div>
                <?php } ?>
                <div class="mensaje-alerta-total">
                </div>
                
            </div>

        </div>
    <?php } ?>
<?php } ?>

<?php if ($vta_presupuesto->getEstado() == 1) { ?>
        
    <?php if ($vta_presupuesto->getImporteTotalPresupuestoConIva() >= $ins_tipo_lista_precio->getImporteMinimo()) { ?>
        <?php if (!$hay_conflicto_general) { ?>
    
            <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_CONFIRMAR_PREAPROBACION')) { ?>
                <?php if (!$vta_presupuesto->getPreaprobado()) { ?>
                    <div class="botonera preaprobacion">
                        
                        <button type="button" class="boton" id="btn_presupuesto_generar_preaprobacion" name="btn_presupuesto_generar_preaprobacion">
                            <div class="titulo">Registrar como Preaprobado</div>
                            <div class="comentario">Confirma que el presupuesto ya puede ser revisado para su aprobación</div>
                        </button>         
                        
                        <button type="button" class="boton" id="btn_presupuesto_abandonar_presupuesto" name="btn_presupuesto_abandonar_presupuesto">
                            <div class="titulo">Mantener En Curso</div>
                            <div class="comentario">Abandona el presupuesto y lo mantiene abierto, puede ser editado luego</div>
                        </button>   
                        
                    </div>
                <?php } ?>
            <?php } ?>
    
            <div class="botonera confirmacion">

                <div class="col c1">
                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_CONFIRMAR_VENTA_DIFERIDA')) { ?>
                        <button type="button" class="boton" id="btn_presupuesto_generar_venta_diferida" name="btn_presupuesto_generar_venta_diferida">
                            <div class="titulo">Venta Diferida</div>
                            <div class="comentario">Genera OV para gestionar en diferido</div>
                        </button>
                    <?php } ?>
                </div>

                <div class="col c2">
                    <?php if ($vta_presupuesto->getVtaPresupuestoTipoVenta()->getCodigo() == VtaPresupuestoTipoVenta::TIPO_VENTA_A) { ?>    
                        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_CONFIRMAR_VENTA_INMEDIATA_CONTADO')) { ?>
                            <button type="button" class="boton" id="btn_presupuesto_generar_venta_inmediata_contado" name="btn_presupuesto_generar_venta_inmediata_contado">
                                <div class="titulo">Venta Inmediata Contado</div>
                                <div class="comentario">Genera OV + Remito + Factura + Recibo</div>                
                            </button>
                        <?php } ?>
                    <?php } ?>
                </div>

                <div class="col c3">
                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_CONFIRMAR_VENTA_INMEDIATA_CTACTE') && false) { ?>
                        <button type="button" class="boton" id="btn_presupuesto_generar_venta_inmediata_ctacte" name="btn_presupuesto_generar_venta_inmediata_ctacte">
                            <div class="titulo">Venta Inmediata Cuenta Corriente</div>
                            <div class="comentario">Genera OV + Remito</div>                
                        </button>
                    <?php } ?>
                </div>

            </div>

        <?php if ($vta_presupuesto->getVtaPresupuestoTipoVenta()->getCodigo() == VtaPresupuestoTipoVenta::TIPO_VENTA_Z) { ?>    
        <div class="botonera confirmacion ajuste">

            <div class="col c1">
            </div>

            <div class="col c2">
                <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_CONFIRMAR_AJUSTE_INMEDIATA_CONTADO')) { ?>
                    <button type="button" class="boton" id="btn_presupuesto_generar_ajuste_inmediata_contado" name="btn_presupuesto_generar_ajuste_inmediata_contado">
                        <div class="titulo">Ajuste Inmediato Contado</div>
                        <div class="comentario">Genera OV + Remito Ajuste + Ajuste Debe + Ajuste Haber</div>                
                    </button>
                <?php } ?>
            </div>

            <div class="col c3">
                <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_CONFIRMAR_AJUSTE_INMEDIATA_CTACTE') && false) { ?>
                    <button type="button" class="boton" id="btn_presupuesto_generar_ajuste_inmediata_ctacte" name="btn_presupuesto_generar_ajuste_inmediata_ctacte">
                        <div class="titulo">Ajuste Inmediato Cuenta Corriente</div>
                        <div class="comentario">Genera OV + Remito Ajuste</div>                
                    </button>
                <?php } ?>
            </div>

        </div> 
        <?php } ?>
    
        <?php } else { ?>
            <div class="mensaje-conflicto">Existe un CONFLICTO que debe resolver para poder generar las proceder.</div>
        <?php } ?>
    <?php } else { ?>
        <div class="mensaje-conflicto">El presupuesto no cumple el importe minimo exigido para la lista de precios. Minimo <?php Gral::_echoImp($ins_tipo_lista_precio->getImporteMinimo()) ?></div>
    <?php } ?>
<?php } ?>

<script>
    setInit();
    setInitVtaPresupuestoGestion();
</script>  