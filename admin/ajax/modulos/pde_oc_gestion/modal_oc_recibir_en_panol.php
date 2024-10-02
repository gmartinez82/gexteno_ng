<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc';
$hdn_error = 1;

$pde_oc = new PdeOc();

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pde_oc = PdeOc::getOxId($hdn_id);

    $cmb_pde_centro_recepcion_id = Gral::getVars(1, "cmb_pde_centro_recepcion_id");
    $cmb_pan_panol_id = Gral::getVars(1, "cmb_pan_panol_id");
    //$cmb_ins_insumo_id = Gral::getVars(1, "cmb_ins_insumo_id");
    $txt_cantidad = Gral::getVars(1, "txt_cantidad", 0);
    $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_unitario", 0, Gral::TIPO_FLOAT_MASK));

    $txt_nro_punto_venta = Gral::getVars(1, "txt_nro_punto_venta");
    $txt_nro_comprobante = Gral::getVars(1, "txt_nro_comprobante");

    $txt_fecha = Gral::getFechaToDB(Gral::getVars(1, "txt_fecha", 0));
    $txa_observacion = Gral::getVars(1, "txa_observacion");
    //Gral::prr($pde_oc);
    //exit;

    $txt_insumo_identificado = $_POST['txt_insumo_identificado'];
    $txt_insumo_identificado_codigo_interno = $_POST['txt_insumo_identificado_codigo_interno'];
    $cmb_ins_marca_id = $_POST['cmb_ins_marca_id'];
    $cmb_ins_insumo_instancia_id = $_POST['cmb_ins_insumo_instancia_id'];
    $txt_km = $_POST['txt_km'];
    $txt_km_total = $_POST['txt_km_total'];


    //$ins_insumo = InsInsumo::getOxId($cmb_ins_insumo_id);
    $cantidad = $txt_cantidad;
    $insumo_id = $pde_oc->getInsInsumoId();
    $cmb_ins_insumo_id = $insumo_id;
    $ins_insumo = $pde_oc->getInsInsumo();
    $pan_panol_id = $cmb_pan_panol_id;

    // control de datos
    $estado = true;

    if (Ctrl::esVacio($cmb_pde_centro_recepcion_id)) {
        $estado = false;
        $cmb_pde_centro_recepcion_id_error = Lang::_lang('Debe seleccionar un Centro de Recepcion', true);
    }
    if (Ctrl::esVacio($cmb_pan_panol_id)) {
        $estado = false;
        $cmb_pan_panol_id_error = Lang::_lang('Debe seleccionar un Panol', true);
    }
    if (!Ctrl::esNumero($txt_cantidad) || trim($txt_cantidad) == 0) {
        $estado = false;
        $txt_cantidad_error = Lang::_lang('Debe ingresar un numero mayor a 1', true);
    }
    else {
        if ($txt_cantidad > $pde_oc->getCantidadTotalPorRecibir()) {
            $estado = false;
            $txt_cantidad_error = 'La cantidad maxima permitida a recibir es: ' . $pde_oc->getCantidadTotalPorRecibir() . ' ' . $pde_oc->getInsInsumo()->getInsUnidadMedida()->getDescripcion();
        }
    }
    if (!Ctrl::esNumero($txt_importe_unitario)) {
        $estado = false;
        $txt_importe_unitario_error = Lang::_lang('Debe ingresar un importe', true);
    }

    if (Ctrl::esVacio($txt_nro_punto_venta)) {
        $estado = false;
        $txt_nro_comprobante_error = Lang::_lang('Debe ingresar un punto de venta valido', true);
    }
    else {
        if (strlen($txt_nro_punto_venta) != DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA) {
            $estado = false;
            $txt_nro_comprobante_error = Lang::_lang('Debe ingresar un punto de venta valido, por ejemplo 0004', true);
        }
    }
    if (!Ctrl::esDigito($txt_nro_comprobante)) {
        $estado = false;
        $txt_nro_comprobante_error = Lang::_lang('Debe ingresar un nro de comprobante valido', true);
    }
    else {
        if (strlen($txt_nro_comprobante) != DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE) {
            $estado = false;
            $txt_nro_comprobante_error = Lang::_lang('Debe ingresar un nro de comprobante valido, por ejemplo 0154578', true);
        }
    }

    if (!Ctrl::esFechaValida($txt_fecha)) {
        $estado = false;
        $txt_fecha_error = Lang::_lang('Debe ingresar una fecha valida', true);
    }

    // si es identificable
    if ($ins_insumo->getIdentificable()) {
        // se controlan los insumos identificados
        for ($i = 1; $i <= $cantidad; $i++) {

            // -------------------------------------------------------------
            // control de codigo fabrica
            // -------------------------------------------------------------
            if (Ctrl::esVacio($txt_insumo_identificado[$i])) {
                $estado = false;
                $txt_insumo_identificado_error[$i] = Lang::_lang('Ingrese Cod Fabrica', true);
            }
            else {

                // -------------------------------------------------------------
                // control de duplicidad de codigo fabrica
                // -------------------------------------------------------------
                $o = InsInsumoIdentificado::getOxDescripcion(strtoupper(str_replace(' ', '', $txt_insumo_identificado[$i])));
                if ($o) {
                    $estado = false;
                    $txt_insumo_identificado_error[$i] = Lang::_lang('Ya Existe: ' . $o->getDescripcionLarga(), true);
                }
                $cantidad_apariciones = Gral::getCantidadAparicionesEnArray($txt_insumo_identificado[$i], $txt_insumo_identificado);
                if ($cantidad_apariciones > 1) {
                    $estado = false;
                    $txt_insumo_identificado_error[$i] = Lang::_lang('Codigo Duplicado: ' . $txt_insumo_identificado[$i], true);
                }
            }

            // -------------------------------------------------------------
            // control de codigo interno
            // -------------------------------------------------------------
            if (Ctrl::esVacio($txt_insumo_identificado_codigo_interno[$i])) {
                $estado = false;
                $txt_insumo_identificado_codigo_interno_error[$i] = Lang::_lang('Ingrese Cod Interno', true);
            }
            else {

                // -------------------------------------------------------------
                // control de formato valido [1-125]
                // -------------------------------------------------------------
                $primer_caracter = substr($txt_insumo_identificado_codigo_interno[$i], 0, 1);
                $segundo_caracter = substr($txt_insumo_identificado_codigo_interno[$i], 1, 1);

                if (!Ctrl::esDigito($primer_caracter)) {
                    $estado = false;
                    $txt_insumo_identificado_codigo_interno_error[$i] = Lang::_lang('No se reconoce el galpon, debe usar el formato [9-999]', true);
                }
                if ($segundo_caracter != '-') {
                    $txt_insumo_identificado_codigo_interno_error[$i] = Lang::_lang('No se encuentra caracter de separacion (guion medio), debe usar el formato [9-999]', true);
                }

                // -------------------------------------------------------------
                // control de duplicidad de codigo interno
                // -------------------------------------------------------------
                $o = InsInsumoIdentificado::getOxCodigo(strtoupper(str_replace(' ', '', $txt_insumo_identificado_codigo_interno[$i])));
                if ($o) {
                    $estado = false;
                    $txt_insumo_identificado_codigo_interno_error[$i] = Lang::_lang('Ya Existe: ' . $o->getDescripcionLarga(), true);
                }
                $cantidad_apariciones = Gral::getCantidadAparicionesEnArray($txt_insumo_identificado_codigo_interno[$i], $txt_insumo_identificado_codigo_interno);
                if ($cantidad_apariciones > 1) {
                    $estado = false;
                    $txt_insumo_identificado_codigo_interno_error[$i] = Lang::_lang('Codigo Duplicado: ' . $txt_insumo_identificado_codigo_interno[$i], true);
                }
            }

            // -------------------------------------------------------------
            // marca
            // -------------------------------------------------------------
            if (Ctrl::esVacio($cmb_ins_marca_id[$i])) {
                $estado = false;
                $cmb_ins_marca_id_error[$i] = Lang::_lang('Debe seleccionar Marca', true);
            }

            // -------------------------------------------------------------
            // instancia
            // -------------------------------------------------------------
            if (Ctrl::esVacio($cmb_ins_insumo_instancia_id[$i])) {
                $estado = false;
                $cmb_ins_insumo_instancia_id_error[$i] = Lang::_lang('Debe seleccionar Instancia', true);
            }

            // -------------------------------------------------------------
            // km
            // -------------------------------------------------------------
            if (!Ctrl::esDigito($txt_km[$i])) {
                $estado = false;
                $txt_km_error[$i] = Lang::_lang('Debe registrar km', true);
            }

            // -------------------------------------------------------------
            // km total
            // -------------------------------------------------------------
            if (!Ctrl::esDigito($txt_km_total[$i])) {
                $estado = false;
                $txt_km_total_error[$i] = Lang::_lang('Debe registrar km total', true);
            }
        }
    }

    if ($estado) {
        $hdn_error = 0;

        $txt_nro_comprobante_full = $txt_nro_punto_venta . '-' . $txt_nro_comprobante;

        // -------------------------------------------------------------
        // se registra la recepcion de la orden de compra
        // -------------------------------------------------------------
        $pde_recepcion = $pde_oc->addPdeRecepcion(
                $cmb_pde_centro_recepcion_id, $cmb_ins_insumo_id, $txt_cantidad, $txt_importe_unitario, $txt_nro_comprobante_full, $txt_fecha, $txa_observacion
        );

        // -------------------------------------------------------------
        // se registra estado de la recepcion, PdeRecepcionEstado
        // -------------------------------------------------------------
        $pde_recepcion_estado = $pde_recepcion->setPdeRecepcionEstado(
                PdeRecepcionTipoEstado::TIPO_RECIBIDO_POR_PANOL, $pde_centro_recepcion_id = $cmb_pde_centro_recepcion_id, $pan_panol_id = $pan_panol_id, $cantidad = $txt_cantidad, $veh_coche_id = null, $ope_chofer_id = null, $fecha_conciliacion = false, $observaciones = $txa_observacion
        );

        // -------------------------------------------------------------
        // se registra aviso destinatarios de la recepcion, PdeRecepcionDestinatario
        // -------------------------------------------------------------
        $pde_recepcion->setPdeRecepcionDestinatariosAviso();


        if ($ins_insumo->getControlStock()) {
            $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_INGRESO;
            // -------------------------------------------------------------
            // se registra pedido para control y actualizacion de stock
            // -------------------------------------------------------------
            $pdi_pedido = PdiPedido::setPdiPedidoPorMovimientoManualDeInsumo(
                            $ins_insumo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad, $observacion = 'Recepcion de Compra ' . $pde_recepcion->getCodigo(), $ins_stock_tipo_movimiento_codigo
            );
        }

        // -------------------------------------------------------------
        // se registran los movimientos de insumo identificado
        // -------------------------------------------------------------
        if ($ins_insumo->getIdentificable()) {
            for ($i = 1; $i <= $cantidad; $i++) {

                // -------------------------------------------------------------
                // se iniciliza el insumo identificado
                // -------------------------------------------------------------
                $ins_insumo_identificado = InsInsumoIdentificado::setInicializarIdentificadoNuevoEnPanol(
                                $pdi_pedido, $pde_recepcion, $pan_panol_id, $ins_insumo->getId(), $txt_insumo_identificado[$i], $txt_insumo_identificado_codigo_interno[$i], $cmb_ins_marca_id[$i], $cmb_ins_insumo_instancia_id[$i], $txt_km[$i], $txt_km_total[$i], $observaciones = 'Movimiento por Recepcion de Insumo en Pañol desde PDE'
                );

                // -------------------------------------------------------------
                // se registra el costo inicial del insumo identificado
                // -------------------------------------------------------------
                $ins_insumo_identificado->setInsInsumoIdentificadoCostoActual($pde_recepcion);
            }
        }

        $pan_panol = PanPanol::getOxId($pan_panol_id);

        // se envia aviso ---------------------------------------------------------------------
        $asunto = 'PDR Recibido en ' . $pan_panol->getDescripcion() . ' #' . $pde_recepcion->getCodigo() . ' ' . date('d/m/Y H:m');
        $pde_recepcion->enviarAvisos($asunto);
        // ------------------------------------------------------------------------------------
    }
}
else {
    $oc_id = Gral::getVars(2, 'oc_id', 0);
    if ($oc_id != 0) {
        $pde_oc = PdeOc::getOxId($oc_id);
    }
    $pde_oc->setPdeOcLeido();

    $ins_insumo = $pde_oc->getInsInsumo();

    $cmb_pde_centro_recepcion_id = 0;
    $cmb_ins_insumo_id = $pde_oc->getInsInsumoId();
    $txt_cantidad = $pde_oc->getCantidad();
    $txt_importe_unitario = $pde_oc->getImporteUnidadNeto();
    $txt_nro_punto_venta = '';
    $txt_nro_comprobante = '';
    $txt_fecha = date('Y-m-d');

    // -------------------------------------------------------------
    // ajuste de cantidad para recepciones parciales
    // -------------------------------------------------------------
    $txt_cantidad = $pde_oc->getCantidadTotalPorRecibir();

    $cantidad = $txt_cantidad;
    $insumo_id = $pde_oc->getInsInsumoId();
}

$pde_centro_pedido = $pde_oc->getPdeCentroPedido();
?>
<form id='form_pedido' name='form_pedido' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pde_oc_gestion/modal_oc_recibir_en_panol.php" ?>' >
    <div class='datos modal-recibir' >

        <?php include "pde_oc_gestion_modal_top.php" ?>   

        <div class="col c1">

            <div class="par">
                <div class="label"><?php Lang::_lang('Codigo') ?></div>
                <div class="dato">
                    <?php Gral::_echo($pde_oc->getCodigo()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                <div class="dato">
                    <?php Gral::_echo($pde_oc->getPrvProveedor()->getDescripcion()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Centro de Recepcion') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $cmb_pde_centro_recepcion_id, 'textbox') ?>
                    <div class="error"><?php Gral::_echo($cmb_pde_centro_recepcion_id_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Panol') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmbFxCredencial(), '...'), $cmb_pan_panol_id, 'textbox') ?>
                    <div class="error"><?php Gral::_echo($cmb_pan_panol_id_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Cantidad') ?></div>
                <div class="dato">
                    <input name='txt_cantidad' type='text' class='textbox spinner' id='txt_cantidad' value='<?php Gral::_echo($txt_cantidad) ?>' size='5' minimo="1" maximo="8" />
                    <div class="error"><?php Gral::_echo($txt_cantidad_error) ?></div>
                </div>
            </div>

        </div>

        <div class="col c2">

            <div class="par">
                <div class="label"><?php Lang::_lang('Importe Autorizado') ?></div>
                <div class="dato">
                    <?php Gral::_echoImp($pde_oc->getImporteUnidadNeto()) ?>

                    <label class="texto-iva">
                        <?php Gral::_echo($pde_oc->getIvaIncluido() ? 'IVA Incluido' : '+ IVA') ?>            
                    </label>                    
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Importe Real') ?></div>
                <div class="dato">
                    <input name='txt_importe_unitario' type='text' class='textbox moneda' id='txt_importe_unitario' value='<?php Gral::_echoImp($txt_importe_unitario) ?>' size='15' />
                    <label class="texto-iva">
                        <?php Gral::_echo($pde_oc->getIvaIncluido() ? 'IVA Incluido' : '+ IVA') ?>            
                    </label>

                    <div class="comentario">
                        <?php Lang::_lang('Formato: 9.999,99') ?>
                    </div>
                    <div class="error"><?php Gral::_echo($txt_importe_unitario_error) ?></div>  
                </div>        
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nro Comprobante') ?></div>
                <div class="dato">
                    <input name='txt_nro_punto_venta' type='text' class='textbox nro-punto-venta' id='txt_nro_punto_venta' value='<?php Gral::_echo($txt_nro_punto_venta) ?>' size='5' placeholder="000-000" />
                    <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($txt_nro_comprobante) ?>' size='15' placeholder="0000000" />

                    <div class="error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
                </div>
            </div>   

            <div class="par">
                <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
                <div class="dato">
                    <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Recepcion') ?></div>
                <div class="dato">
                    <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha)) ?>' size='10' />
                    <input type='button' id='cal_txt_fecha' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha'
                        });
                    </script>
                    <div class="error"><?php echo $txt_fecha_error ?></div>
                </div>
            </div>

        </div>


        <?php if ($ins_insumo->getIdentificable()) { ?>
            <h4><?php Lang::_lang('Insumos Identificados') ?></h4>
            <div class="bloque bloque_insumos_identificados_entrantes">
                <?php include "bloque_insumos_identificados_entrantes.php" ?>
            </div>
        <?php } ?>


        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='90' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
            </div>
            <div class="error"></div>
        </div>

        <div class="mensaje-recepcion-en-panol">
            Esta a punto de registrar la recepcion en DEPOSITO. Se afectara el stock del producto recibido.
        </div>
            
        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Registrar Recepcion') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_oc->getId() ?>' />

            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro la Recepcion correctamente') ?>' />
        </div>

    </div>
</form>
