<?php
include "_autoload.php";

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

$pdi_pedido = new PdiPedido();

$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }

    $pdi_pedido_entrega_cmb_pan_panol_origen_id = Gral::getVars(1, "pdi_pedido_entrega_cmb_pan_panol_origen_id", null);
    $pdi_pedido_entrega_dbsug_ins_insumo_id = Gral::getVars(1, "pdi_pedido_entrega_dbsug_ins_insumo_id", 0);
    $pdi_pedido_entrega_txt_cantidad = Gral::getVars(1, "pdi_pedido_entrega_txt_cantidad", 0);
    $pdi_pedido_entrega_txa_observacion = Gral::getVars(1, "pdi_pedido_entrega_txa_observacion", '');

    $pdi_pedido_entrega_cmb_veh_coche_id = Gral::getVars(1, "pdi_pedido_entrega_cmb_veh_coche_id", null);
    $pdi_pedido_entrega_cmb_ope_operario_id = Gral::getVars(1, "pdi_pedido_entrega_cmb_ope_operario_id", null);
    $pdi_pedido_entrega_cmb_tal_orden_trabajo_id = Gral::getVars(1, "pdi_pedido_entrega_cmb_tal_orden_trabajo_id", null);
    $pdi_pedido_entrega_cmb_tal_tarea_resuelta_id = Gral::getVars(1, "pdi_pedido_entrega_cmb_tal_tarea_resuelta_id", null);

    $cantidad = $pdi_pedido_entrega_txt_cantidad;
    $panol_destino_id = $pdi_pedido_entrega_cmb_pan_panol_origen_id;
    $veh_coche_id = $pdi_pedido_entrega_cmb_veh_coche_id;
    $panol_id = $pdi_pedido_entrega_cmb_pan_panol_origen_id;

    $pan_panol = PanPanol::getOxId($pdi_pedido_entrega_cmb_pan_panol_origen_id);
    $veh_coche = VehCoche::getOxId($veh_coche_id);
    $ope_operario = OpeOperario::getOxId($pdi_pedido_entrega_cmb_ope_operario_id);
    $tal_orden_trabajo = TalOrdenTrabajo::getOxId($pdi_pedido_entrega_cmb_tal_orden_trabajo_id);
    $tal_tarea_resuelta = TalTareaResuelta::getOxId($pdi_pedido_entrega_cmb_tal_tarea_resuelta_id);
    $glp_galpon = $pan_panol->getGlpGalpon();

    $ins_insumo = InsInsumo::getOxId($pdi_pedido_entrega_dbsug_ins_insumo_id);
    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);

// insumo identificado que se entrega
    if ($ins_insumo) {
        if ($ins_insumo->getIdentificable()) {

            for ($i = 1; $i <= $cantidad; $i++) {
                eval('$pdi_pedido_entrega_dbsugg_ins_insumo_identificado_' . $i . '_id = Gral::getVars(1, "pdi_pedido_entrega_dbsugg_ins_insumo_identificado_' . $i . '_id", null);');
                eval('$pdi_pedido_entrega_cmb_ins_insumo_instancia_' . $i . '_id = Gral::getVars(1, "pdi_pedido_entrega_cmb_ins_insumo_instancia_' . $i . '_id", null);');
                eval('$pdi_pedido_entrega_txt_kilometraje_' . $i . ' = Gral::getVars(1, "pdi_pedido_entrega_txt_kilometraje_' . $i . '", null);');
            }
        }
    }

// insumo identificado que reingresa al pañol desde coche
    if ($ins_insumo) {
        if ($ins_insumo->getRetornable()) {

            for ($i = 1; $i <= $cantidad; $i++) {
                eval('$pdi_pedido_saliente_dbsugg_ins_insumo_identificado_' . $i . '_id = Gral::getVars(1, "pdi_pedido_saliente_dbsugg_ins_insumo_identificado_' . $i . '_id", null);');
                eval('$pdi_pedido_saliente_cmb_ins_insumo_instancia_' . $i . '_id = Gral::getVars(1, "pdi_pedido_saliente_cmb_ins_insumo_instancia_' . $i . '_id", null);');
                eval('$pdi_pedido_saliente_txt_kilometraje_' . $i . ' = Gral::getVars(1, "pdi_pedido_saliente_txt_kilometraje_' . $i . '", null);');
                eval('$pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_' . $i . '_id = Gral::getVars(1, "pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_' . $i . '_id", null);');
            }
        }
    }

    // control de datos
    $estado = true;

    if (Ctrl::esNull($pdi_pedido_entrega_cmb_pan_panol_origen_id)) {
        $estado = false;
        $pdi_pedido_entrega_cmb_pan_panol_origen_id_error = Lang::_lang('Debe seleccionar el panol', true);
    }
    if ($pdi_pedido_entrega_dbsug_ins_insumo_id == 0) {
        $estado = false;
        $pdi_pedido_entrega_dbsug_ins_insumo_id_error = Lang::_lang('Debe seleccionar un insumo', true);
    }
    if ((int) $pdi_pedido_entrega_txt_cantidad <= 0) {
        $estado = false;
        $pdi_pedido_entrega_txt_cantidad_error = Lang::_lang('Debe agregar un valor mayor a cero', true);
    }
    if (Ctrl::esNull($pdi_pedido_entrega_cmb_veh_coche_id)) {
        $estado = false;
        $pdi_pedido_entrega_cmb_veh_coche_id_error = Lang::_lang('Debe seleccionar el Coche', true);
    }
    if (Ctrl::esNull($pdi_pedido_entrega_cmb_ope_operario_id)) {
        $estado = false;
        $pdi_pedido_entrega_cmb_ope_operario_id_error = Lang::_lang('Debe seleccionar el Operario', true);
    }
    if (Ctrl::esNull($pdi_pedido_entrega_cmb_tal_orden_trabajo_id)) {
        $estado = false;
        $pdi_pedido_entrega_cmb_tal_orden_trabajo_id_error = Lang::_lang('Debe seleccionar la OT', true);
    }
    if (Ctrl::esNull($pdi_pedido_entrega_cmb_tal_tarea_resuelta_id)) {
        $estado = false;
        $pdi_pedido_entrega_cmb_tal_tarea_resuelta_id_error = Lang::_lang('Debe seleccionar la Tarea Resuelta', true);
    }
    if ($ins_stock_resumen) {
        $ins_stock_resumen_cantidad = $ins_stock_resumen->getCantidad();
        if ($ins_stock_resumen_cantidad <= 0) {
            $estado = false;
            $bloque_stock_error = Lang::_lang('No existe STOCK en el Panol', true);
        }
    } else {
        $estado = false;
        $bloque_stock_error = Lang::_lang('No existe INICIALIZACION de STOCK en el Panol', true);
    }





// control insumos identificados entregados a operario
    if ($ins_insumo) {
        if ($ins_insumo->getIdentificable()) {

            for ($i = 1; $i <= $cantidad; $i++) {

                if (Ctrl::esVacio(eval('return $pdi_pedido_entrega_dbsugg_ins_insumo_identificado_' . $i . '_id;'))) {
                    $estado = false;
                    eval('return $pdi_pedido_entrega_dbsugg_ins_insumo_identificado_' . $i . '_id_error = Lang::_lang(\'Debe seleccionar un insumo identificado\', true);');
                }

                if (Ctrl::esVacio(eval('return $pdi_pedido_entrega_cmb_ins_insumo_instancia_' . $i . '_id;'))) {
                    $estado = false;
                    eval('return $pdi_pedido_entrega_cmb_ins_insumo_instancia_' . $i . '_id_error = Lang::_lang(\'Debe seleccionar una instancia nueva para el insumo identificado\', true);');
                }

                if (Ctrl::esVacio(eval('return $pdi_pedido_entrega_txt_kilometraje_' . $i . ';'))) {
                    $estado = false;
                    eval('return $pdi_pedido_entrega_txt_kilometraje_' . $i . '_error = Lang::_lang(\'Debe seleccionar un nuevo kilometraje para el insumo identificado\', true);');
                }
            }
        }
    }

// control insumos identificados salientes de coche
    if ($ins_insumo) {
        if ($ins_insumo->getRetornable()) {

            for ($i = 1; $i <= $cantidad; $i++) {

                if (Ctrl::esVacio(eval('return $pdi_pedido_saliente_dbsugg_ins_insumo_identificado_' . $i . '_id;'))) {
                    //$estado = false; eval('return $pdi_pedido_saliente_dbsugg_ins_insumo_identificado_'.$i.'_id_error = Lang::_lang(\'Debe seleccionar un insumo identificado\', true);');
                } else {

                    if (Ctrl::esVacio(eval('return $pdi_pedido_saliente_cmb_ins_insumo_instancia_' . $i . '_id;'))) {
                        $estado = false;
                        eval('return $pdi_pedido_saliente_cmb_ins_insumo_instancia_' . $i . '_id_error = Lang::_lang(\'Debe seleccionar una instancia nueva para el insumo identificado\', true);');
                    }

                    if (Ctrl::esVacio(eval('return $pdi_pedido_saliente_txt_kilometraje_' . $i . ';'))) {
                        $estado = false;
                        eval('return $pdi_pedido_saliente_txt_kilometraje_' . $i . '_error = Lang::_lang(\'Debe seleccionar un nuevo kilometraje para el insumo identificado\', true);');
                    }

                    if (Ctrl::esVacio(eval('return $pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_' . $i . '_id;'))) {
                        $estado = false;
                        eval('return $pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_' . $i . '_id_error = Lang::_lang(\'Debe seleccionar un Estado de Salida\', true);');
                    }
                }
            }
        }
    }

    //$estado = false;
    if ($estado) {
        $hdn_error = 0; // no hay error

        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($pdi_pedido_entrega_dbsug_ins_insumo_id);
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_ENTREGA_OPERARIO)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_MEDIA)->getId());
        $pdi_pedido->setOpeOperarioId($pdi_pedido_entrega_cmb_ope_operario_id);
        $pdi_pedido->setPanPanolOrigen($pdi_pedido_entrega_cmb_pan_panol_origen_id);
        $pdi_pedido->setPanPanolDestino($pdi_pedido_entrega_cmb_pan_panol_origen_id);
        $pdi_pedido->setObservacion($pdi_pedido_entrega_txa_observacion);
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_ENTREGADO, $pdi_pedido_entrega_txt_cantidad, $pdi_pedido_entrega_txa_observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el insumo solicitado a donde se vincula la tarea resuelta
        $tal_insumo_solicitado = new TalInsumoSolicitado();
        $tal_insumo_solicitado->setPdiPedidoId($pdi_pedido->getId());
        $tal_insumo_solicitado->setTalTareaResueltaId($tal_tarea_resuelta->getId());
        $tal_insumo_solicitado->setInsInsumoId($ins_insumo->getId());
        $tal_insumo_solicitado->setCantidad($pdi_pedido_entrega_txt_cantidad);
        $tal_insumo_solicitado->setObservacion('Imputado desde Entrega Individual a Operarios');
        $tal_insumo_solicitado->setEstado(0);
        $tal_insumo_solicitado->save();

        // se registra insumo sugerido, para futuras solicitudes del operario
        $array = array(
            array('campo' => 'tal_tarea_base_id', 'valor' => $tal_tarea_resuelta->getTalTareaBaseId()),
            array('campo' => 'veh_modelo_id', 'valor' => $veh_coche->getVehModeloId()),
            array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
        );
        $tal_tarea_insumo = TalTareaInsumo::getOxArray($array);
        if (!$tal_tarea_insumo) {
            $tal_tarea_insumo = new TalTareaInsumo();
            $tal_tarea_insumo->setTalTareaBaseId($tal_tarea_resuelta->getTalTareaBaseId());
            $tal_tarea_insumo->setVehModeloId($veh_coche->getVehModeloId());
            $tal_tarea_insumo->setInsInsumoId($ins_insumo->getId());
            $tal_tarea_insumo->setObservacion('Autoconfigurado por Entrega SS a Operario');
            $tal_tarea_insumo->setCantidad(1);
            $tal_tarea_insumo->setEstado(1);
            $tal_tarea_insumo->save();
        }


        // se registra Movimiento de Stock Reservado
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_SALIDA);

        $ins_insumo = $pdi_pedido->getInsInsumo();
        //$ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, $activo = true);
        if ($ins_insumo) {
            if (!$ins_insumo->getIdentificable()) {
                $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false);
            } else {
                $ins_insumo_identificado_tipo_estado_anterior = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_STOCK);
                $ins_insumo_identificado_tipo_estado_nuevo = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_MOVIMIENTO);
                $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_anterior, $ins_insumo_identificado_tipo_estado_nuevo);

                // ajuste de stock para insumo saliente del coche
                if ($ins_insumo->getRetornable()) {
                    // INGRESO A PANOL
                    for ($i = 1; $i <= $cantidad; $i++) {
                        $pdi_pedido_saliente_dbsugg_ins_insumo_identificado = eval('return $pdi_pedido_saliente_dbsugg_ins_insumo_identificado_' . $i . '_id;');
                        if ($pdi_pedido_saliente_dbsugg_ins_insumo_identificado != 'null' && $pdi_pedido_saliente_dbsugg_ins_insumo_identificado != '') {
                            eval('$ins_insumo_identificado_saliente = InsInsumoIdentificado::getOxId($pdi_pedido_saliente_dbsugg_ins_insumo_identificado_' . $i . '_id);');
                            eval('$ins_insumo_identificado_saliente_tipo_estado_id = $pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_' . $i . '_id;');

                            $ins_insumo_saliente = $ins_insumo_identificado_saliente->getInsInsumo();

                            $ins_stock_tipo_movimiento_saliente = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_INGRESO);
                            $ins_insumo_identificado_saliente_tipo_estado_anterior = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_USO);
                            $ins_insumo_identificado_saliente_tipo_estado_nuevo = InsInsumoIdentificadoTipoEstado::getOxId($ins_insumo_identificado_saliente_tipo_estado_id);
                            $ins_insumo_saliente->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento_saliente, $ins_insumo_identificado_saliente_tipo_estado_anterior, $ins_insumo_identificado_saliente_tipo_estado_nuevo);
                        }
                    }
                }
            }
        }
        // se realiza control de stock post movimiento
        $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
        InsInsumo::execPrcControlPuntosStock($ins_insumo, $pan_panol);


        // unicamente si son insumos identificables
        if ($ins_insumo) {
            if ($ins_insumo->getIdentificable()) {

                // EGRESO DE PANOL
                for ($i = 1; $i <= $cantidad; $i++) {
                    eval('$ins_insumo_identificado = InsInsumoIdentificado::getOxId($pdi_pedido_entrega_dbsugg_ins_insumo_identificado_' . $i . '_id);');
                    eval('$ins_insumo_instancia_id = $pdi_pedido_entrega_cmb_ins_insumo_instancia_' . $i . '_id;');
                    eval('$km = $pdi_pedido_entrega_txt_kilometraje_' . $i . ';');

                    $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_MOVIMIENTO);
                    $array_insumo_movimiento = array(
                        'identificado_id' => $ins_insumo_identificado->getId(),
                        'instancia_id' => $ins_insumo_instancia_id,
                        'km' => $km,
                        'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
                    );

                    // se registra entrega a operario (egreso de panol)
                    $descripcion = 'Entrega de Insumo (SS) a Operario ' . $pdi_pedido->getOpeOperario()->getDescripcion();
                    $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_PANOL_EGRESO);
                    $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $pdi_pedido->getPanPanolDestino(), null, $pdi_pedido_entrega_txa_observacion);
                }

                if ($ins_insumo->getRetornable()) { // solo si es retornable el insumo
                    // INGRESO A PANOL
                    for ($i = 1; $i <= $cantidad; $i++) {
                        $pdi_pedido_saliente_dbsugg_ins_insumo_identificado = eval('return $pdi_pedido_saliente_dbsugg_ins_insumo_identificado_' . $i . '_id;');
                        if ($pdi_pedido_saliente_dbsugg_ins_insumo_identificado != 'null' && $pdi_pedido_saliente_dbsugg_ins_insumo_identificado != '') {

                            eval('$ins_insumo_identificado = InsInsumoIdentificado::getOxId($pdi_pedido_saliente_dbsugg_ins_insumo_identificado_' . $i . '_id);');
                            eval('$ins_insumo_instancia_id = $pdi_pedido_saliente_cmb_ins_insumo_instancia_' . $i . '_id;');
                            eval('$km = $pdi_pedido_saliente_txt_kilometraje_' . $i . ';');
                            eval('$ins_insumo_identificado_tipo_estado_id = $pdi_pedido_saliente_cmb_ins_insumo_identificado_tipo_estado_' . $i . '_id;');

                            $array_insumo_movimiento = array(
                                'identificado_id' => $ins_insumo_identificado->getId(),
                                'instancia_id' => $ins_insumo_instancia_id,
                                'km' => $km,
                                'tipo_estado_id' => $ins_insumo_identificado_tipo_estado_id
                            );

                            // se registra egreso de coche
                            $descripcion = 'Egreso de Coche ' . $veh_coche->getDescripcion();
                            $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_COCHE_EGRESO);
                            $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, null, $veh_coche->getId(), $pdi_pedido_entrega_txa_observacion);

                            // se registra ingreso a panol
                            $descripcion = 'Ingreso a Panol desde Coche ' . $veh_coche->getDescripcion();
                            $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_PANOL_INGRESO);
                            $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $pdi_pedido->getPanPanolDestino(), null, $pdi_pedido_entrega_txa_observacion);

                            // se registra que el insumo no tiene mas vinculacion al coche donde estaba asignado
                            $tal_insumo_asignado_ultimo = TalInsumoAsignado::getTalInsumoAsignadoIdentificadoUltimo($saliente_identificado_id);
                            if ($tal_insumo_asignado_ultimo) {
                                $tal_insumo_asignado_ultimo->setActual(0);
                                $tal_insumo_asignado_ultimo->setFinal(1);
                                $tal_insumo_asignado_ultimo->save();
                            }
                        }
                    }
                }
            }
        }

        // se registra el consumo del insumo en el coche
        $tal_insumo_solicitado->setRegistrarInsumoConsumido();

        //header('Location: modal_pedido_confirmacion?id='.$pdi_pedido->getId());
        //exit;
    }
} else {
    /*
      $pedido_id = Gral::getVars(2, 'pedido_id', 0);
      if($pedido_id != 0){
      $pdi_pedido = PdiPedido::getOxId($pedido_id);
      }
      $pdi_pedido->setPdiPedidoLeido();
      $pdi_pedido_txt_cantidad = $pdi_pedido->getPdiEstadoActual()->getCantidad();

      $ins_insumo = $pdi_pedido->getInsInsumo();
      $panol_destino_id = $pdi_pedido->getPanPanolDestino();
      $veh_coche_id = $pdi_pedido->getTalInsumoSolicitado()->getTalTareaResuelta()->getTalTareaAsignada()->getTalOrdenTrabajo()->getVehCocheId();
     */

    Gral::setSes('MECANO_PDI_ENTREGA_INS_IDENTIFICADO_ARRAY_TMP', null);
    Gral::setSes('MECANO_PDI_SALIENTE_INS_IDENTIFICADO_ARRAY_TMP', null);

    $pdi_pedido_entrega_cmb_pan_panol_origen_id = PanPanol::getOxCodigo('GARUPA')->getId();
    $pdi_pedido_entrega_txt_cantidad = 1;
    $cantidad = $pdi_pedido_txt_cantidad;

    $glp_galpon = GlpGalpon::getOxId($pdi_pedido_entrega_cmb_pan_panol_origen_id);
}
?>
<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_entrega_operario.php' >

    <div class="bloque stock">
        <?php include Gral::getPathAbs() . "admin/ajax/modulos/pdi_pedido_gestion/bloque_stock_insumo.php" ?>
    </div>

    <div class="datos pdi-entrega-operario" tabindex="1">


        <!-- Columna 1 -->
        <div class="col c1">

            <div class="par">
                <div class="label"><?php Lang::_lang('Panol Origen') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'pdi_pedido_entrega_cmb_pan_panol_origen_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmbFxCredencial(), '...'), $pdi_pedido_entrega_cmb_pan_panol_origen_id, 'textbox') ?>
                    <div class="error insumo-identificado-label-error pdi_pedido_entrega_cmb_pan_panol_origen_id_error"><?php Gral::_echo($pdi_pedido_entrega_cmb_pan_panol_origen_id_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
                <div class="dato">
                    <?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_entrega_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest_custom.php?identificable=0&consumible=1', false, true, true, 'Ingrese ...', ($ins_insumo) ? $ins_insumo->getId() : null, ($ins_insumo) ? $ins_insumo->getDescripcion() : '') ?>		
                    <div class="error insumo-identificado-label-error pdi_pedido_entrega_dbsug_ins_insumo_id_error"><?php Gral::_echo($pdi_pedido_entrega_dbsug_ins_insumo_id_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Cantidad') ?></div>
                <div class="dato" style="display:none;">
                    1<br /><br />
                </div>
                <div class="dato">
                    <input name='pdi_pedido_entrega_txt_cantidad' type='text' class='textbox spinner' id='pdi_pedido_entrega_txt_cantidad' value='<?php Gral::_echoTxt($pdi_pedido_entrega_txt_cantidad) ?>' size='5' />
                    <div class="error insumo-identificado-label-error pdi_pedido_entrega_txt_cantidad_error"><?php Gral::_echo($pdi_pedido_entrega_txt_cantidad_error) ?></div>
                </div>
            </div>

        </div>

        <!-- Columna 2 -->
        <div class="col c2">

            <div class="par">
                <div class="label"><?php Lang::_lang('Coche') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'pdi_pedido_entrega_cmb_veh_coche_id', $glp_galpon->getVehCochesCmb(), $pdi_pedido_entrega_cmb_veh_coche_id, 'textbox') ?>
                    <input type="checkbox" id="chk_coches_ver_todos" name="chk_coches_ver_todos" value="1" title="Ver Todos los Coches" />

                    <div class="error insumo-identificado-label-error pdi_pedido_entrega_cmb_veh_coche_id_error"><?php Gral::_echo($pdi_pedido_entrega_cmb_veh_coche_id_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Operario') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'pdi_pedido_entrega_cmb_ope_operario_id', Gral::getCmbFiltro(($glp_galpon) ? $glp_galpon->getOpeOperariosOrdenadosCmb() : OpeOperario::getOpeOperariosOrdenadosCmb(), '...'), $pdi_pedido_entrega_cmb_ope_operario_id, 'textbox') ?>
                    <div class="error insumo-identificado-label-error pdi_pedido_entrega_cmb_ope_operario_id_error"><?php Gral::_echo($pdi_pedido_entrega_cmb_ope_operario_id_error) ?></div>
                </div>
            </div>

            <div class="div_bloque_ots_operario">
                <?php
                include "bloque_ots_operario.php";
                ?>
            </div>

        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_entrega_txa_observacion' rows='3' cols='60' id='pdi_pedido_entrega_txa_observacion' class='textbox'><?php Gral::_echoTxt($pdi_pedido_entrega_txa_observacion, true) ?></textarea>
            </div>
            <div class="error"></div>
        </div>

        <div class="div_insumos_identificados">
            <?php
            //$ins_insumo = $pdi_pedido->getInsInsumo();
            include "bloque_insumos_identificados_entrega_operario.php";
            ?>
        </div>

        <div class="div_insumos_identificados_salientes">
            <?php
            //$ins_insumo = $pdi_pedido->getInsInsumo();
            include "bloque_insumos_identificados_salientes.php";
            ?>
        </div>


        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Entregar Pedido a Operario') ?>' onclick="$(this).val('Procesando ...');
                    if (!controlDatosRegistrarEntregaOperario())
                        return false;" />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pdi_pedido->getId() ?>' />
            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro la Entrega del Pedido Correctamente') ?>' />

            <input id="hdn_ins_insumo_id" name='hdn_ins_insumo_id' type='hidden' value='<?php echo $pdi_pedido->getInsInsumoId() ?>' size="5" />
            <input id="hdn_pan_panol_id" name='hdn_pan_panol_id' type='hidden' value='<?php echo $pdi_pedido->getPanPanolDestino() ?>' size="5" />

        </div>

        <div class="div_modal_modalx"></div>

    </div>
</form>