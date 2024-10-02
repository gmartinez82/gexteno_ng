<?php
include "_autoload.php";

$pdi_pedido = new PdiPedido();
$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pdi_pedido->setId($hdn_id);

    $btn_guardar = Gral::getVars(1, 'btn_guardar');

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }

    $pdi_pedido_txt_cantidad = Gral::getVars(1, "pdi_pedido_txt_cantidad", null);
    $pdi_pedido_txa_observacion = Gral::getVars(1, "pdi_pedido_txa_observacion", '');

    $cantidad = $pdi_pedido_txt_cantidad;
    $cantidad_despachada = $pdi_pedido->getPdiEstadoActual()->getCantidad();

    $ins_insumo = $pdi_pedido->getInsInsumo();
    $panol_destino_id = $pdi_pedido->getPanPanolDestino();

    if ($ins_insumo) {
        if ($ins_insumo->getIdentificable()) {

            for ($i = 1; $i <= $cantidad; $i++) {
                eval('$pdi_pedido_recibir_dbsugg_ins_insumo_identificado_' . $i . '_id = Gral::getVars(1, "pdi_pedido_recibir_dbsugg_ins_insumo_identificado_' . $i . '_id", null);');
                eval('$pdi_pedido_recibir_cmb_ins_insumo_instancia_' . $i . '_id = Gral::getVars(1, "pdi_pedido_recibir_cmb_ins_insumo_instancia_' . $i . '_id", null);');
                eval('$pdi_pedido_recibir_txt_kilometraje_' . $i . ' = Gral::getVars(1, "pdi_pedido_recibir_txt_kilometraje_' . $i . '", null);');
            }
        }
    }


    // control de datos
    $estado = true;

    if ((int) $pdi_pedido_txt_cantidad <= 0) {
        $estado = false;
        $pdi_pedido_txt_cantidad_error = Lang::_lang('Debe agregar un valor mayor a cero', true);
    }

    // se controla que no se reciba mas de lo que se despacho
    if($cantidad > $cantidad_despachada){
        $estado = false;
        $pdi_pedido_txt_cantidad_error = Lang::_lang('No se puede recibir mas de '.$cantidad_despachada.' unidades despachadas', true);
    }
    if ($pdi_pedido_txa_observacion == '') {
        $estado = false;
        $pdi_pedido_txa_observacion_error = Lang::_lang('Debe ingresar una observacion', true);
    }
    
    
    // control insumos identificados despachados
    if ($ins_insumo) {
        if ($ins_insumo->getIdentificable()) {

            for ($i = 1; $i <= $cantidad; $i++) {

                if (Ctrl::esVacio(eval('return $pdi_pedido_recibir_dbsugg_ins_insumo_identificado_' . $i . '_id;'))) {
                    $estado = false;
                    eval('return $pdi_pedido_recibir_dbsugg_ins_insumo_identificado_' . $i . '_id_error = Lang::_lang(\'Debe seleccionar un insumo identificado\', true);');
                }

                if (Ctrl::esVacio(eval('return $pdi_pedido_recibir_cmb_ins_insumo_instancia_' . $i . '_id;'))) {
                    $estado = false;
                    eval('return $pdi_pedido_recibir_cmb_ins_insumo_instancia_' . $i . '_id_error = Lang::_lang(\'Debe seleccionar una instancia nueva para el insumo identificado\', true);');
                }

                if (Ctrl::esVacio(eval('return $pdi_pedido_recibir_txt_kilometraje_' . $i . ';'))) {
                    $estado = false;
                    eval('return $pdi_pedido_recibir_txt_kilometraje_' . $i . '_error = Lang::_lang(\'Debe seleccionar un nuevo kilometraje para el insumo identificado\', true);');
                }
            }
        }
    }

    //Gral::prr($pdi_pedido);
    //$estado = false;
    if ($estado) {
        $hdn_error = 0; // no hay error
        //$pdi_pedido->save();

        $pdi_estado = $pdi_pedido->getPdiEstadoActual();

        // se registra estado del pedido, PdiEstado
        $pdi_estado_nuevo = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_RECIBIDO, $pdi_pedido_txt_cantidad, $pdi_pedido_txa_observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        //$pdi_pedido->setPdiPedidoDestinatariosAviso();
        // se registra Movimiento de Stock Reservado
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_INGRESO);

        $ins_insumo = $pdi_pedido->getInsInsumo();
        //$ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, $activo = true);
        if ($ins_insumo) {
            if (!$ins_insumo->getIdentificable()) {
                $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, false, false);
            } else {
                $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_STOCK);
                $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado, $ins_insumo_identificado_tipo_estado);
            }
        }
        // se realiza control de stock post movimiento
        $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolOrigen());
        InsInsumo::execPrcControlPuntosStock($ins_insumo, $pan_panol);


// unicamente si son insumos identificables
        if ($ins_insumo) {
            if ($ins_insumo->getIdentificable()) {

                // EGRESO DE PANOL
                for ($i = 1; $i <= $cantidad; $i++) {
                    eval('$ins_insumo_identificado = InsInsumoIdentificado::getOxId($pdi_pedido_recibir_dbsugg_ins_insumo_identificado_' . $i . '_id);');
                    eval('$ins_insumo_instancia_id = $pdi_pedido_recibir_cmb_ins_insumo_instancia_' . $i . '_id;');
                    eval('$km = $pdi_pedido_recibir_txt_kilometraje_' . $i . ';');

                    $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_STOCK);
                    $array_insumo_movimiento = array(
                        'identificado_id' => $ins_insumo_identificado->getId(),
                        'instancia_id' => $ins_insumo_instancia_id,
                        'km' => $km,
                        'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
                    );

                    $pan_panol_origen = PanPanol::getOxId($pdi_pedido->getPanPanolOrigen());

                    // se registra Recepcion
                    $descripcion = 'Recepción de Insumo en ' . $pan_panol_origen->getDescripcion();
                    $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_PANOL_INGRESO);
                    $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $pan_panol_origen->getId(), null, $pdi_pedido_txa_observacion);
                }
            }
        }

        //header('Location: modal_pedido_confirmacion?id='.$pdi_pedido->getId());
        //exit;
    }
} else {
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if ($pedido_id != 0) {
        $pdi_pedido = PdiPedido::getOxId($pedido_id);
    }
    $pdi_pedido->setPdiPedidoLeido();
    $pdi_pedido_txt_cantidad = $pdi_pedido->getPdiEstadoActual()->getCantidad();

    $cantidad = $pdi_pedido_txt_cantidad;

    $ins_insumo = $pdi_pedido->getInsInsumo();
    $panol_destino_id = $pdi_pedido->getPanPanolDestino();

    $i = 1;
    $ins_insumo_identificados = $pdi_pedido->getInsInsumoIdentificadosVinculados();
    foreach ($ins_insumo_identificados as $ins_insumo_identificado) {
        $ins_insumo_identificado_movimiento = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
        //Gral::prr($ins_insumo_identificado_movimiento);

        if (!$ins_insumo_identificado_movimiento) {
            $ins_insumo_identificado_movimiento = new InsInsumoIdentificadoMovimiento();
        }

        eval('$pdi_pedido_recibir_dbsugg_ins_insumo_identificado_' . $i . '_id = $ins_insumo_identificado->getId();');
        eval('$pdi_pedido_recibir_cmb_ins_insumo_instancia_' . $i . '_id = $ins_insumo_identificado_movimiento->getInsInsumoInstanciaId();');
        eval('$pdi_pedido_recibir_txt_kilometraje_' . $i . ' = $ins_insumo_identificado_movimiento->getKm();');

        $i++;
    }
    Gral::setSes('MECANO_PDI_RECIBIR_INS_IDENTIFICADO_ARRAY_TMP', null);
}
?>
<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_recibir.php' >
    <div class="datos pdi-recibir">

        <?php include "pdi_pedido_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <input name='pdi_pedido_txt_cantidad' type='text' class='textbox' id='pdi_pedido_txt_cantidad' value='<?php Gral::_echoTxt($pdi_pedido_txt_cantidad) ?>' size='5' />
                <div class="error"><?php Gral::_echo($pdi_pedido_txt_cantidad_error) ?></div>
            </div>
        </div>

        <div class="div_insumos_identificados">
            <?php
            include "bloque_insumos_identificados_recibir.php";
            ?>
        </div>    

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_txa_observacion' rows='10' cols='60' id='pdi_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($pdi_pedido_txa_observacion, true) ?></textarea>
                <div class="error"><?php Gral::_echo($pdi_pedido_txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Recibir Pedido') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pdi_pedido->getId() ?>' />
            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro el Recepcion del Pedido Correctamente') ?>' />

            <input id="hdn_ins_insumo_id" name='hdn_ins_insumo_id' type='hidden' value='<?php echo $pdi_pedido->getInsInsumoId() ?>' size="5" />
            <input id="hdn_pan_panol_id" name='hdn_pan_panol_id' type='hidden' value='<?php echo $pdi_pedido->getPanPanolDestino() ?>' size="5" />
        </div>

    </div>
</form>