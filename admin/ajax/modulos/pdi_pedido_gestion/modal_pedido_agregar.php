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

    $pdi_pedido_cmb_pan_panol_origen = Gral::getVars(1, "pdi_pedido_cmb_pan_panol_origen", null);
    $pdi_pedido_dbsug_ins_insumo_id = Gral::getVars(1, "pdi_pedido_dbsug_ins_insumo_id", 0);
    $pdi_pedido_rad_pan_panol_id = Gral::getVars(1, "pdi_pedido_rad_pan_panol_id", null);
    $pdi_pedido_txt_cantidad = Gral::getVars(1, "pdi_pedido_txt_cantidad", null);
    $pdi_pedido_cmb_pdi_urgencia_id = Gral::getVars(1, "pdi_pedido_cmb_pdi_urgencia_id", 0);
    $pdi_pedido_txa_observacion = Gral::getVars(1, "pdi_pedido_txa_observacion", null);

    $ins_insumo = InsInsumo::getOxId($pdi_pedido_dbsug_ins_insumo_id);
    //Gral::prr($ins_insumo);
    if (!$ins_insumo) {
        $ins_insumo = new InsInsumo();
    } else {
        $insumo_seleccionado = true;
    }

    // control de datos
    $estado = true;
    if (Ctrl::esVacio($pdi_pedido_cmb_pan_panol_origen)) {
        $estado = false;
        $pdi_pedido_cmb_pan_panol_origen_error = Lang::_lang('Debe ingresar valores', true);
    }
    if (Ctrl::esVacio($pdi_pedido_dbsug_ins_insumo_id)) {
        $estado = false;
        $pdi_pedido_dbsug_ins_insumo_id_error = Lang::_lang('Debe seleccionar un insumo para proseguir', true);
    }
    if (trim($pdi_pedido_dbsug_ins_insumo_id) == '0') {
        $estado = false;
        $pdi_pedido_dbsug_ins_insumo_id_error = Lang::_lang('Debe seleccionar un insumo para proseguir', true);
    } else {
        // se consultan los pedidos activos
        $pdi_pedidos_activos = PdiPedido::getPdiPedidosActivos($pdi_pedido_cmb_pan_panol_origen, $pdi_pedido_dbsug_ins_insumo_id);
        if (count($pdi_pedidos_activos) > 0) {
            $estado = false;
            $pdi_pedido_dbsug_ins_insumo_id_error = Lang::_lang('Ya tiene pedidos activos para el insumo requerido', true);
        }
    }
    if (Ctrl::esVacio($pdi_pedido_rad_pan_panol_id)) {
        $estado = false;
        $pdi_pedido_rad_pan_panol_id_error = Lang::_lang('Debe seleccionar un panol donde realizar el pedido', true);
    } else {
        if ($pdi_pedido_cmb_pan_panol_origen == $pdi_pedido_rad_pan_panol_id) {
            $estado = false;
            $pdi_pedido_rad_pan_panol_id_error = Lang::_lang('No puede solicitar al panol origen', true);
        }
    }
    if ($pdi_pedido_cmb_pdi_urgencia_id == 0) {
        $estado = false;
        $pdi_pedido_cmb_pdi_urgencia_id_error = Lang::_lang('Debe seleccionar la urgencia del pedido', true);
    }
    if ($pdi_pedido_txa_observacion == '') {
        $estado = false;
        $pdi_pedido_txa_observacion_error = Lang::_lang('Debe ingresar una observacion', true);
    }

    $pdi_pedido = new PdiPedido();
    if (trim($hdn_id) != '') {
        $pdi_pedido->setId($hdn_id, false);
    }
    $pdi_pedido->setInsInsumoId($pdi_pedido_dbsug_ins_insumo_id);
    $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_PANOL)->getId());
    $pdi_pedido->setPdiUrgenciaId($pdi_pedido_cmb_pdi_urgencia_id);
    $pdi_pedido->setPanPanolOrigen($pdi_pedido_cmb_pan_panol_origen);
    $pdi_pedido->setPanPanolDestino($pdi_pedido_rad_pan_panol_id);
    //$pdi_pedido->setObservacion($pdi_pedido_txa_observacion);
    $pdi_pedido->setEstado(1);

    //Gral::prr($pdi_pedido);

    if ($estado) {
        $hdn_error = 0;

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_SOLICITADO, $pdi_pedido_txt_cantidad, $pdi_pedido_txa_observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra Movimiento de Stock Reservado
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_RESERVA);

        $ins_insumo = $pdi_pedido->getInsInsumo();
        //$ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento);
        // se envia aviso ---------------------------------------------------------------------
        $asunto = 'PDI Pedido Interno Nuevo #' . $pdi_pedido->getCodigo() . ' ' . date('d/m/Y H:m');
        $pdi_pedido->enviarAvisos($asunto);
        // ------------------------------------------------------------------------------------
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
    $pdi_pedido_txt_cantidad = 0;

    $pdi_urgencia = PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA);
    $pdi_pedido->setPdiUrgenciaId($pdi_urgencia->getId());

    $tipo_accion = Gral::getVars(Gral::VARS_GET, 'tipo_accion', '');
    switch ($tipo_accion) {
        case "solicitud":
            Gral::setSes('MECANO_PDI_AJUSTE_TIPO', 'AJUSTE');
            $ins_stock_resumen_id = Gral::getVars(2, $prefijo . 'ins_stock_resumen_id', 0);
            $ins_stock_resumen = InsStockResumen::getOxId($ins_stock_resumen_id);

            $ins_insumo = $ins_stock_resumen->getInsInsumo();
            $pan_panol = $ins_stock_resumen->getPanPanol();
            $pdi_pedido_txt_cantidad = $ins_stock_resumen->getCantidadSugeridaReabastecimiento();

            $pdi_pedido->setPanPanolOrigen($pan_panol->getId());
            $pdi_pedido->setInsInsumoId($ins_insumo->getId());

            $insumo_seleccionado = true;

            break;
        default:
            Gral::setSes('MECANO_PDI_AJUSTE_TIPO', '');
    }
}

$pan_panols = PanPanol::getPanPanols();
?>
<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar.php' >
    <div class="datos pdi-agregar" tabindex="1">

        <div class="par">
            <div class="label"><?php Lang::_lang('Panol Origen') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'pdi_pedido_cmb_pan_panol_origen', PanPanol::getPanPanolsCmbFxCredencial(), $pdi_pedido->getPanPanolOrigen(), 'textbox') ?>
                <div class="error"><?php Gral::_echo($pdi_pedido_cmb_pan_panol_origen_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest_custom.php', false, true, true, 'Ingrese ...', ($ins_insumo->getId() != 'null') ? $ins_insumo->getId() : null, $ins_insumo->getDescripcion(), 50) ?>
                <div class="error"><?php Gral::_echo($pdi_pedido_dbsug_ins_insumo_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <input name='pdi_pedido_txt_cantidad' type='text' class='textbox spinner' id='pdi_pedido_txt_cantidad' value='<?php Gral::_echoTxt($pdi_pedido_txt_cantidad) ?>' size='5' />
                <div class="error"><?php Gral::_echo($pdi_pedido_txt_cantidad_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('PdiUrgencia') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'pdi_pedido_cmb_pdi_urgencia_id', Gral::getCmbFiltro(PdiUrgencia::getPdiUrgenciasCmb(), '...'), $pdi_pedido->getPdiUrgenciaId(), 'textbox') ?>
                <div class="error"><?php Gral::_echo($pdi_pedido_cmb_pdi_urgencia_id_error) ?></div>
            </div>
        </div>


        <div class="div_stock_insumos">
            <?php
            //if($pdi_pedido->getInsInsumoId() != 'null'){
            //$ins_stock_resumens = $pdi_pedido->getInsInsumo()->getInsStockResumens();
            $ins_insumo = $pdi_pedido->getInsInsumo();
            include "bloque_stock_insumos.php";
            // }
            ?>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_txa_observacion' rows='3' cols='80' id='pdi_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($pdi_pedido_txa_observacion, true) ?></textarea>
                <div class="error"><?php Gral::_echo($pdi_pedido_txa_observacion_error) ?></div>
            </div>
        </div>


        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Registrar Pedido') ?>' />

            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro nuevo el Pedido Correctamente') ?>' />
        </div>

    </div>
</form>