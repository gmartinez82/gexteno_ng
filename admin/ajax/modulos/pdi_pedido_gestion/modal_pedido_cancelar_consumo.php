<?php
include "_autoload.php";

$pdi_pedido = new PdiPedido();
$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pdi_pedido->setId($hdn_id);
    //Gral::prr($pdi_pedido);

    $pdi_pedido_cancelacion_txa_observacion = Gral::getVars(1, "pdi_pedido_cancelacion_txa_observacion", '');

    $estado = true;

    if (Ctrl::esVacio($pdi_pedido_cancelacion_txa_observacion)) {
        $estado = false;
        $pdi_pedido_cancelacion_txa_observacion_error = Lang::_lang('Debe ingresar algun comentario', true);
    }
    if ($pdi_pedido_cancelacion_txa_observacion == '') {
        $estado = false;
        $pdi_pedido_cancelacion_txa_observacion_error = Lang::_lang('Debe ingresar una observacion', true);
    }
    

    if ($estado) {
        $hdn_error = 0; // no hay error
        //TalInsumoAsignado::execPrcActualizarConsumoInsumo($veh_coche_id = 312, $ins_insumo_id = 2605);
        //exit;

        $pdi_estado = $pdi_pedido->getPdiEstadoActual();
        $cantidad = $pdi_estado->getCantidad();

        // se elimina nuevo movimiento de stock
        $asunto = 'Se cancela imputacion por cancelación de consumo';
        $pdi_pedido->setRetrotraerMovimientoStock($asunto);

        // se retrotrae asignacion de insumo al coche
        $pdi_pedido->setRetrotraerInsumoAsignado();

        // se elimina insumo solicitado
        $pdi_pedido->deleteTalInsumoSolicitados();


        // se actualiza estado del pedido interno
        $pdi_pedido->setPdiPedidoEstado(
                $tipo_estado_codigo = PdiTipoEstado::TIPO_ESTADO_ANULADO, $cantidad, //  se retrotrae la cantidad imputada
                $observaciones = 'Motivo: ' . $pdi_pedido_cancelacion_txa_observacion
        );
    }
} else {
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if ($pedido_id != 0) {
        $pdi_pedido = PdiPedido::getOxId($pedido_id);
    }
}
?>
<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_cancelar_consumo.php' >
    <div class="datos">

        <?php include "pdi_pedido_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label">&nbsp;</div>
            <div class="dato">
                <ul>
                    <li>Se cancelará la imputación del insumo en el vehículo.</li>
                    <li>Se retrotaerá el movimiento de stock.</li>
                    <li>Los insumos anteriormente activos serán reactivados en el coche.</li>
                </ul>
            </div>
            <div class="error"></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_cancelacion_txa_observacion' rows='7' cols='60' id='pdi_pedido_cancelacion_txa_observacion' class='textbox'><?php Gral::_echoTxt($pdi_pedido_cancelacion_txa_observacion, true) ?></textarea>
                <div class="error"><?php Gral::_echo($pdi_pedido_cancelacion_txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Cancelar Consumo de Insumo') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pdi_pedido->getId() ?>' />
            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se Genero Solicitud de Compra Correctamente') ?>' />
        </div>

    </div>
</form>