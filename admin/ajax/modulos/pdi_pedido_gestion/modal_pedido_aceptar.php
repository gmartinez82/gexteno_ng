<?php
include "_autoload.php";

$pdi_pedido = new PdiPedido();
$error = new DbError();
$hdn_error = 1;

if (Gral::esPost())
{
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
	
    $ins_insumo = $pdi_pedido->getInsInsumo();
    $panol_destino_id = $pdi_pedido->getPanPanolDestino();
    $pan_panol_destino = PanPanol::getOxId($panol_destino_id);
    
    $panol_origen_id = $pdi_pedido->getPanPanolOrigen();
    $pan_panol_origen = PanPanol::getOxId($panol_origen_id);
    
    // control de datos
    $estado = true;
	
    if ((int) $pdi_pedido_txt_cantidad <= 0) {
        $estado = false;
        $pdi_pedido_txt_cantidad_error = Lang::_lang('Debe agregar un valor mayor a cero', true);
    }
    if ($pdi_pedido_txa_observacion == '') {
        $estado = false;
        $pdi_pedido_txa_observacion_error = Lang::_lang('Debe ingresar una observacion', true);
    }
    
	
    //Gral::prr($pdi_pedido);
    //$estado = false;
    if ($estado)
    {
        $hdn_error = 0; // no hay error
        //$pdi_pedido->save();
        $pdi_estado = $pdi_pedido->getPdiEstadoActual();
		
        // se registra estado del pedido, PdiEstado
        $pdi_estado_nuevo = $pdi_pedido->setPdiPedidoEstado(PdiTipoEstado::TIPO_ESTADO_ACEPTADO, $pdi_pedido_txt_cantidad, $pdi_pedido_txa_observacion);
		
        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatariosAviso();
		
        // se anula el registro de reserva en movimientos
        $pdi_pedido->setAnularReserva('APROBACION');

        // ---------------------------------------------------------------------
        // Se registra la reserva
        // ---------------------------------------------------------------------
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_RESERVA);
        $ins_insumo = $pdi_pedido->getInsInsumo();
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento);
        // ---------------------------------------------------------------------
        
        $ins_insumo = $pdi_pedido->getInsInsumo();

		
        // se realiza control de stock post movimiento
        $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
        InsInsumo::execPrcControlPuntosStock($ins_insumo, $pan_panol);		
		
        // se envia aviso ---------------------------------------------------------------------
        $asunto = 'PDI Pedido Interno Despachado #' . $pdi_pedido->getCodigo() . ' ' . date('d/m/Y H:m');
        $pdi_pedido->enviarAvisos($asunto);
        // ------------------------------------------------------------------------------------
		
        //header('Location: modal_pedido_confirmacion?id='.$pdi_pedido->getId());
        //exit;
    }
}
else
{
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if ($pedido_id != 0)
    {
        $pdi_pedido = PdiPedido::getOxId($pedido_id);
    }
    $pdi_pedido_txt_cantidad = $pdi_pedido->getPdiEstadoActual()->getCantidad();
    $cantidad = $pdi_pedido_txt_cantidad;
	
    $ins_insumo = $pdi_pedido->getInsInsumo();
    $panol_destino_id = $pdi_pedido->getPanPanolDestino();
    //Gral::setSes('MECANO_PDI_DESPACHAR_INS_IDENTIFICADO_ARRAY_TMP', null);
}

$panol_destino_id = $pdi_pedido->getPanPanolDestino();
$pan_panol_destino = PanPanol::getOxId($panol_destino_id);

$panol_origen_id = $pdi_pedido->getPanPanolOrigen();
$pan_panol_origen = PanPanol::getOxId($panol_origen_id);

$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();

$ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_destino);
if ($ins_stock_resumen) {
    $cantidad_en_stock = $ins_stock_resumen->getCantidad();
    $cantidad_reservados = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol_destino);
    $cantidad_en_stock_total = $cantidad_en_stock + $cantidad_reservados;
}

?>

<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_aceptar.php' >
    <div class="datos pdi-aceptar">
        <?php include "pdi_pedido_gestion_modal_top.php" ?>   
        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad en') ?> <?php Gral::_echo($pan_panol_destino->getDescripcion()) ?> </div>
            <div class="dato">
                <?php Gral::_echo($cantidad_en_stock_total) ?> <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
            </div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad Aceptar') ?></div>
            <div class="dato">
                <input name='pdi_pedido_txt_cantidad' type='text' class='textbox' id='pdi_pedido_txt_cantidad' value='<?php Gral::_echoTxt($pdi_pedido_txt_cantidad) ?>' size='5' />
                <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
                
                <div class="error"><?php Gral::_echo($pdi_pedido_txt_cantidad_error) ?></div>
            </div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_txa_observacion' rows='10' cols='60' id='pdi_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($pdi_pedido_txa_observacion, true) ?></textarea>
                <div class="error"><?php Gral::_echo($pdi_pedido_txa_observacion_error) ?></div>
            </div>
        </div>
        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Aceptar Pedido') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pdi_pedido->getId() ?>' />
            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se Acepto el Pedido Correctamente') ?>' />

            <input id="hdn_ins_insumo_id" name='hdn_ins_insumo_id' type='hidden' value='<?php echo $pdi_pedido->getInsInsumoId() ?>' size="5" />
            <input id="hdn_pan_panol_id" name='hdn_pan_panol_id' type='hidden' value='<?php echo $pdi_pedido->getPanPanolDestino() ?>' size="5" />
        </div>
    </div>
</form>