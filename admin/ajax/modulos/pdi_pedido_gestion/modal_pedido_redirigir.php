<?php
include "_autoload.php";

$pdi_pedido = new PdiPedido();
$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    //Gral::prr($_POST);
    //exit;
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pdi_pedido->setId($hdn_id);

    $btn_guardar = Gral::getVars(1, 'btn_guardar');

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }

    $pdi_pedido_rad_pan_panol_id = Gral::getVars(1, "pdi_pedido_rad_pan_panol_id", null);
    $pdi_pedido_txa_observacion = Gral::getVars(1, "pdi_pedido_txa_observacion", '');

    // control de datos
    $estado = true;
    if (Ctrl::esVacio($pdi_pedido_rad_pan_panol_id)) {
        $estado = false;
        $pdi_pedido_rad_pan_panol_id_error = Lang::_lang('Debe seleccionar un panol donde realizar el pedido', true);
    }
    if ($pdi_pedido_txa_observacion == '') {
        $estado = false;
        $pdi_pedido_txa_observacion_error = Lang::_lang('Debe ingresar una observacion', true);
    }

    //Gral::prr($pdi_pedido);

    if ($estado) {
        $hdn_error = 0; // no hay error
        // se anula el registro de reserva en movimientos
        $pdi_pedido->setAnularReserva('RECHAZADA');

        // se recalcula resumen de stock despues de cancelar la reserva
        $pan_panol_destino = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
        InsStockResumen::setRecalcularStockInsumo($pan_panol_destino, $pdi_pedido->getInsInsumo());

        // se setea nuevo panol destino
        $pdi_pedido->setPanPanolDestino($pdi_pedido_rad_pan_panol_id);

        // se actualizar el PdiPedido para registrar el nuevo panol destino
        $pdi_pedido->save();

        $pdi_estado = $pdi_pedido->getPdiEstadoActual();

        // se registra estado del pedido, PdiEstado
        $pdi_estado_nuevo = $pdi_pedido->setPdiPedidoEstado(PdiTipoEstado::TIPO_ESTADO_REDIRIGIDO, $pdi_estado->getCantidad(), $pdi_pedido_txa_observacion);

        // se actualizan destinatarios del PdiPedido
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        //$pdi_pedido->setPdiPedidoDestinatariosAviso();
        // se registra Movimiento de Stock Reservado
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_RESERVA);

        $ins_insumo = $pdi_pedido->getInsInsumo();
        //30/05/2017: Anulado. Las redirecciones no generan mas reservas.
        //$ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, false, false);
        // se envia aviso ---------------------------------------------------------------------
        $asunto = 'PDI Pedido Interno Redirigido #' . $pdi_pedido->getCodigo() . ' ' . date('d/m/Y H:m');
        $pdi_pedido->enviarAvisos($asunto);
        // ------------------------------------------------------------------------------------
        //header('Location: modal_pedido_confirmacion?id='.$pdi_pedido->getId());
        //exit;
    }
} else {
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if ($pedido_id != 0) {
        $pdi_pedido = PdiPedido::getOxId($pedido_id);
    }
    $pdi_pedido->setPdiPedidoLeido();
}
$ins_insumo = $pdi_pedido->getInsInsumo();
$pan_panols = PanPanol::getPanPanols();
?>
<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_redirigir.php' >
    <div class="datos">

        <?php include "pdi_pedido_gestion_modal_top.php" ?>   

        <div class="div_stock_insumos">
            <?php
            //if($pdi_pedido->getInsInsumoId() != 'null'){
            //$ins_stock_resumens = $pdi_pedido->getInsInsumo()->getInsStockResumens();
            include "bloque_stock_insumos.php";
            //}
            ?>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_txa_observacion' rows='3' cols='80' id='pdi_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($pdi_pedido->getObservacion(), true) ?></textarea>
                <div class="error"><?php Gral::_echo($pdi_pedido_txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Redirigir Pedido') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pdi_pedido->getId() ?>' />
            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se Redirigio el Pedido Correctamente') ?>' />
        </div>

    </div>
</form>