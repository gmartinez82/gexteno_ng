<?php
include "_autoload.php";

$pdi_pedido = new PdiPedido();
$error = new DbError();
$hdn_error = 1;
$insumo_seleccionado = false;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }

    $pdi_pedido_ajuste_cmb_pan_panol_origen = Gral::getVars(1, "pdi_pedido_ajuste_cmb_pan_panol_origen", 0);
    $pdi_pedido_ajuste_dbsug_ins_insumo_id = Gral::getVars(1, "pdi_pedido_ajuste_dbsug_ins_insumo_id", 0);

    $pdi_pedido_ajuste_txt_cantidad = Gral::getVars(1, "pdi_pedido_ajuste_txt_cantidad", null);
    $pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id = Gral::getVars(1, "pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id", null);
    $pdi_pedido_ajuste_txa_observacion = Gral::getVars(1, "pdi_pedido_ajuste_txa_observacion", '');

    $ins_insumo = InsInsumo::getOxId($pdi_pedido_ajuste_dbsug_ins_insumo_id);
    //Gral::prr($ins_insumo);
    if (!$ins_insumo) {
        $ins_insumo = new InsInsumo();
    } else {
        $insumo_seleccionado = true;
    }
    $cantidad = $pdi_pedido_ajuste_txt_cantidad;
    $pan_panol_id_controlar_existencia = false;

    $pan_panol = PanPanol::getOxId($pdi_pedido_ajuste_cmb_pan_panol_origen);
    //$ins_insumo = InsInsumo::getOxId($pdi_pedido_ajuste_dbsug_ins_insumo_id);

    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
    $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxId($pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id);

    if ($ins_insumo) {
        if ($ins_insumo->getIdentificable()) {

            for ($i = 1; $i <= $cantidad; $i++) {
                eval('$pdi_pedido_ajuste_dbsugg_ins_insumo_identificado_' . $i . '_id = Gral::getVars(1, "pdi_pedido_ajuste_dbsugg_ins_insumo_identificado_' . $i . '_id", null);');
                eval('$pdi_pedido_ajuste_cmb_ins_insumo_instancia_' . $i . '_id = Gral::getVars(1, "pdi_pedido_ajuste_cmb_ins_insumo_instancia_' . $i . '_id", null);');
                eval('$pdi_pedido_ajuste_txt_kilometraje_' . $i . ' = Gral::getVars(1, "pdi_pedido_ajuste_txt_kilometraje_' . $i . '", null);');
            }
        }
    }

    // control de datos
    $estado = true;
    if (Ctrl::esVacio($pdi_pedido_ajuste_cmb_pan_panol_origen)) {
        $estado = false;
        $pdi_pedido_ajuste_cmb_pan_panol_origen_error = Lang::_lang('Debe ingresar valores', true);
    }
    if (Ctrl::esVacio($pdi_pedido_ajuste_dbsug_ins_insumo_id)) {
        $estado = false;
        $pdi_pedido_ajuste_dbsug_ins_insumo_id_error = Lang::_lang('Debe seleccionar un insumo para proseguir', true);
    }
    if (trim($pdi_pedido_ajuste_dbsug_ins_insumo_id) == '0') {
        $estado = false;
        $pdi_pedido_ajuste_dbsug_ins_insumo_id_error = Lang::_lang('Debe seleccionar un insumo para proseguir', true);
    }
    if (Ctrl::esVacio($pdi_pedido_ajuste_txt_cantidad)) {
        $estado = false;
        $pdi_pedido_ajuste_txt_cantidad_error = Lang::_lang('Debe ingresar cantidad', true);
    } else {
        if (!$ins_stock_tipo_movimiento->getSuma()) {
            if ($ins_stock_resumen) {
                $ins_stock_resumen_cantidad = $ins_stock_resumen->getCantidad();
                if (($ins_stock_resumen_cantidad - $pdi_pedido_ajuste_txt_cantidad) < 0) {
                    $estado = false;
                    $pdi_pedido_ajuste_txt_cantidad_error = Lang::_lang('No hay suficiente STOCK para ajustar la cantidad solicitada', true);
                }
            }
        }
    }
    if (Ctrl::esVacio($pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id)) {
        $estado = false;
        $pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id_error = Lang::_lang('Debe seleccionar un tipo de movimiento', true);
    }
    if ($pdi_pedido_ajuste_txa_observacion == '') {
        $estado = false;
        $pdi_pedido_ajuste_txa_observacion_error = Lang::_lang('Debe ingresar una observacion', true);
    }


    // ------------------------------------------------------------------------------------
    // se controla que el insumo no tenga ninguna reserva en el panol
    if ($ins_insumo->getId() != '') {
        $cantidad_reservados = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol);
        if ($cantidad_reservados > 0) {
            $estado = false;
            $pdi_pedido_ajuste_dbsug_ins_insumo_id_error = Lang::_lang('No puede realizar ajustes', true) . '. ' . Lang::_lang('El insumo posee reservas en el panol', true) . ': ' . $cantidad_reservados;
        }
    }
    // ------------------------------------------------------------------------------------


    if ($ins_insumo) {
        if ($ins_insumo->getIdentificable()) {

            for ($i = 1; $i <= $cantidad; $i++) {

                if (Ctrl::esVacio(eval('return $pdi_pedido_ajuste_dbsugg_ins_insumo_identificado_' . $i . '_id;'))) {
                    $estado = false;
                    eval('return $pdi_pedido_ajuste_dbsugg_ins_insumo_identificado_' . $i . '_id_error = Lang::_lang(\'Debe seleccionar un insumo identificado\', true);');
                }

                if (Ctrl::esVacio(eval('return $pdi_pedido_ajuste_cmb_ins_insumo_instancia_' . $i . '_id;'))) {
                    $estado = false;
                    eval('return $pdi_pedido_ajuste_cmb_ins_insumo_instancia_' . $i . '_id_error = Lang::_lang(\'Debe seleccionar una instancia nueva para el insumo identificado\', true);');
                }

                if (Ctrl::esVacio(eval('return $pdi_pedido_ajuste_txt_kilometraje_' . $i . ';'))) {
                    $estado = false;
                    eval('return $pdi_pedido_ajuste_txt_kilometraje_' . $i . '_error = Lang::_lang(\'Debe seleccionar un nuevo kilometraje para el insumo identificado\', true);');
                }
            }
        }
    }


    $pdi_pedido = new PdiPedido();
    if (trim($hdn_id) != '') {
        $pdi_pedido->setId($hdn_id, false);
    }
    $pdi_pedido->setInsInsumoId($pdi_pedido_ajuste_dbsug_ins_insumo_id);
    $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE_PANOL)->getId());
    $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
    $pdi_pedido->setPanPanolOrigen($pdi_pedido_ajuste_cmb_pan_panol_origen);
    $pdi_pedido->setPanPanolDestino($pdi_pedido_ajuste_cmb_pan_panol_origen);
    //$pdi_pedido->setObservacion($pdi_pedido_ajuste_txa_observacion);
    $pdi_pedido->setEstado(1);
    //Gral::prr($pdi_pedido);


    if ($estado) {
        $hdn_error = 0;

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $pdi_pedido_ajuste_txt_cantidad, $pdi_pedido_ajuste_txa_observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra Movimiento de Stock Reservado
        //$ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_RESERVA);
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxId($pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id);

        $ins_insumo = $pdi_pedido->getInsInsumo();

        if ($ins_insumo) {
            if (!$ins_insumo->getIdentificable()) {
                $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $pdi_pedido_ajuste_txa_observacion);
            } else {
                $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_STOCK);
                $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado, $ins_insumo_identificado_tipo_estado, $txa_observacion);
            }
        }

        // se setea que el insumo mueve y controla stock
        $ins_insumo->setControlStock(1);
        $ins_insumo->save();

        // unicamente si son insumos identificables
        if ($ins_insumo) {
            if ($ins_insumo->getIdentificable()) {
                for ($i = 1; $i <= $cantidad; $i++) {
                    eval('$ins_insumo_identificado = InsInsumoIdentificado::getOxId($pdi_pedido_ajuste_dbsugg_ins_insumo_identificado_' . $i . '_id);');
                    eval('$ins_insumo_instancia_id = $pdi_pedido_ajuste_cmb_ins_insumo_instancia_' . $i . '_id;');
                    eval('$km = $pdi_pedido_ajuste_txt_kilometraje_' . $i . ';');

                    $ins_insumo_identificado_movimiento_anterior = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();

                    // si sale de un coche, se desvincula del mismo
                    if ($ins_insumo_identificado_movimiento_anterior->getVehCocheId() != 'null') {
                        
                    }

                    // si sale de otro panol, actualiza stock de panol anterior
                    if ($ins_insumo_identificado_movimiento_anterior->getPanPanolId() != 'null') {
                        $panol_origen_id = $ins_insumo_identificado_movimiento_anterior->getPanPanolId(); // es el galpon a donde estaba anteriormente
                        $panol_destino_id = $ins_insumo_identificado_movimiento_anterior->getPanPanolId(); // es el galpon a donde estaba anteriormente

                        $observacion = 'Ajuste Automático por ' . $pdi_pedido->getCodigo();
                        PdiPedido::setPdiPedidoAjustePorMovimientoDeInsumoIdentificado(
                                $ins_insumo_identificado->getId(), $panol_origen_id, $panol_destino_id, $observacion
                        );
                    }

                    // se registra movimiento actual del insumo identificado
                    $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_STOCK);
                    $array_insumo_movimiento = array(
                        'identificado_id' => $ins_insumo_identificado->getId(),
                        'instancia_id' => $ins_insumo_instancia_id,
                        'km' => $km,
                        'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
                    );

                    $descripcion = 'Ajuste de Stock';
                    $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_AJUSTE_MANUAL);
                    $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $pdi_pedido_ajuste_cmb_pan_panol_origen, null, $pdi_pedido_ajuste_txa_observacion);
                }
            }
        }

        /*
          // se envia aviso ---------------------------------------------------------------------
          $asunto = 'PDI Pedido Interno Nuevo #'.$pdi_pedido->getCodigo().' '.date('d/m/Y H:m');
          $pdi_pedido->enviarAvisos($asunto);
          // ------------------------------------------------------------------------------------
         */

        //header('Location: modal_pedido_confirmacion?id='.$pdi_pedido->getId());
        //exit;
    }
} else {
    $prefijo = Gral::getVars(2, 'prefijo');
    $cmb_pdi_pedido_id = Gral::getVars(2, $prefijo . 'cmb_pdi_pedido_id', 0);
    if ($cmb_pdi_pedido_id != 0) {
        $pdi_pedido = PdiPedido::getOxId($cmb_pdi_pedido_id);
    }
    $ins_insumo = new InsInsumo();
    $pdi_pedido_ajuste_txt_cantidad = 1;

    $cantidad = $pdi_pedido_ajuste_txt_cantidad;
    $pan_panol_id_controlar_existencia = false;

    Gral::setSes('MECANO_PDI_AJUSTE_INS_IDENTIFICADO_ARRAY_TMP', null);

    $tipo_accion = Gral::getVars(Gral::VARS_GET, 'tipo_accion', '');
    switch ($tipo_accion) {
        case "inicializacion":
            Gral::setSes('MECANO_PDI_AJUSTE_TIPO', 'INICIALIZACION');
            break;
        case "ajuste":
            Gral::setSes('MECANO_PDI_AJUSTE_TIPO', 'AJUSTE');
            $ins_stock_resumen_id = Gral::getVars(2, $prefijo . 'ins_stock_resumen_id', 0);
            $ins_stock_resumen = InsStockResumen::getOxId($ins_stock_resumen_id);

            $ins_insumo = $ins_stock_resumen->getInsInsumo();
            $pan_panol = $ins_stock_resumen->getPanPanol();

            $pdi_pedido_ajuste_cmb_pan_panol_origen = $pan_panol->getId();
            $insumo_seleccionado = true;

            break;
        default:
            Gral::setSes('MECANO_PDI_AJUSTE_TIPO', '');
    }
}

$pan_panols = PanPanol::getPanPanols();
?>
<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_ajuste.php' >

    <div class="bloque stock">
        <?php include Gral::getPathAbs() . "admin/ajax/modulos/pdi_pedido_gestion/bloque_stock_insumo.php" ?>
    </div>

    <div class="datos pdi-agregar-ajuste" tabindex="1">

        <div class="par">
            <div class="label"><?php Lang::_lang('Panol Origen') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'pdi_pedido_ajuste_cmb_pan_panol_origen', PanPanol::getPanPanolsCmbFxCredencial(), $pdi_pedido_ajuste_cmb_pan_panol_origen, 'textbox') ?>
                <div class="error"><?php Gral::_echo($pdi_pedido_ajuste_cmb_pan_panol_origen_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_ajuste_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest_custom.php', false, true, true, 'Ingrese ...', ($ins_insumo->getId() != 'null') ? $ins_insumo->getId() : null, $ins_insumo->getDescripcion(), 50) ?>		
                <div class="error"><?php Gral::_echo($pdi_pedido_ajuste_dbsug_ins_insumo_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <input name='pdi_pedido_ajuste_txt_cantidad' type='text' class='textbox spinner' id='pdi_pedido_ajuste_txt_cantidad' value='<?php Gral::_echoTxt($pdi_pedido_ajuste_txt_cantidad) ?>' size='5' />
                <div class="error"><?php Gral::_echo($pdi_pedido_ajuste_txt_cantidad_error) ?></div>
            </div>
        </div>

        <div class="div_insumos_identificados">
            <?php
            $ins_insumo = $pdi_pedido->getInsInsumo();
            include "bloque_insumos_identificados.php";
            ?>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('InsStockTipoMovimiento') ?></div>
            <div class="dato">

                <?php if (Gral::getSes('MECANO_PDI_AJUSTE_TIPO') == 'INICIALIZACION') { ?>
                    <?php Html::html_dib_select(1, 'pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id', Gral::getCmbFiltro(InsStockTipoMovimiento::getInsStockTipoMovimientosCmbDeInicializacion(), '...'), $pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id, 'textbox') ?>
                <?php } elseif (Gral::getSes('MECANO_PDI_AJUSTE_TIPO') == 'AJUSTE') { ?>
                    <?php Html::html_dib_select(1, 'pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id', Gral::getCmbFiltro(InsStockTipoMovimiento::getInsStockTipoMovimientosCmbDeAjuste(), '...'), $pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id, 'textbox') ?>
                <?php } else { ?>
                    <?php Html::html_dib_select(1, 'pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id', Gral::getCmbFiltro(InsStockTipoMovimiento::getInsStockTipoMovimientosCmbDeInicializacionYAjuste(), '...'), $pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id, 'textbox') ?>
                <?php } ?>

                <div class="error"><?php Gral::_echo($pdi_pedido_ajuste_cmb_ins_stock_tipo_movimiento_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_ajuste_txa_observacion' rows='10' cols='60' id='pdi_pedido_ajuste_txa_observacion' class='textbox'><?php Gral::_echoTxt($pdi_pedido_ajuste_txa_observacion, true) ?></textarea>
                <div class="error"><?php Gral::_echo($pdi_pedido_ajuste_txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Registrar Pedido') ?>' />

            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro nuevo el Pedido Correctamente') ?>' />
        </div>

    </div>
</form>
