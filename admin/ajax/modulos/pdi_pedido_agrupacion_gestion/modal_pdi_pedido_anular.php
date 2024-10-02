<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pdi_pedido_agrupacion';
$hdn_error = 1;

$pdi_pedido_agrupacion = new PdiPedidoAgrupacion();
$error = new DbError();

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($hdn_id);
    $pdi_pedidos = $pdi_pedido_agrupacion->getPdiPedidosDisponiblesParaRechazar();

    $pdi_pedido_agrupacion_items = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionItems();
    $txa_observacion = Gral::getVars(1, "pdi_pedido_agrupacion_txa_observacion", '');

    // control de datos
    $estado = true;

    if (Ctrl::esVacio($txa_observacion)) {
        $estado = false;
        $txa_observacion_error = Lang::_lang('Debe ingresar un comentario por la anulacion', true);
    }

    if ($estado) {
        $pdi_pedidos = $pdi_pedido_agrupacion->getPdiPedidosDisponiblesParaRechazar();
        foreach ($pdi_pedidos as $pdi_pedido) {
            $pdi_estado = $pdi_pedido->getPdiEstadoActual();

            // se registra nuevo estado del pedido, PdiEstado
            $pdi_pedido_estado = $pdi_pedido->setPdiPedidoEstado(PdiTipoEstado::TIPO_ESTADO_RECHAZADO, $pdi_estado->getCantidad(), $txa_observacion);

            // se anula el registro de reserva en movimientos
            $pdi_pedido->setAnularReserva('RECHAZADA');
            $pan_panol_destino = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
            InsStockResumen::setRecalcularStockInsumo($pan_panol_destino, $pdi_pedido->getInsInsumo());
        }

        $pdi_pedido_agrupacion_estado = $pdi_pedido_agrupacion->setPdiPedidoAgrupacionEstado(PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_ANULADO, $txa_observacion);

        $hdn_error = 0;
    }
} else {
    $pdi_pedido_agrupacion_id = Gral::getVars(2, 'pdi_pedido_agrupacion_id', 0);
    if ($pdi_pedido_agrupacion_id != 0) {
        $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);

        $pdi_pedidos = $pdi_pedido_agrupacion->getPdiPedidosDisponiblesParaRechazar();

        $pdi_pedido_agrupacion_items = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionItems();
    }
}

if (!$error->getExisteError()) {
    $hdn_id = Gral::getVars(2, 'id');
    if (trim($hdn_id) != '')
        $pdi_pedido_agrupacion->setId($hdn_id);
}
?>
<form id='form_pedido_masivo' name='form_pedido_masivo' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_anular.php" ?>' >
    <div class='datos-masivo' >
<?php
if ($pdi_pedidos) {
    ?>
            <div class="div_listado_pdi_pedido_agrupacion_items" id="div_listado_pdi_pedido_agrupacion_items">
                <table class="listado_pdi_pedido_agrupacion_items" id="listado_pdi_pedido_agrupacion_items">
                    <thead>
                        <tr>
                            <th width='60' align='center'>Cant</th>
                            <th width='410' align='center'>Insumo</th>
                            <th width='100' align='center'>Cod Interno</th>
                            <th width='100' align='center'>Marca</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    foreach ($pdi_pedidos as $pdi_pedido) {
        $pdi_pedido_id = $pdi_pedido->getId();
        $ins_insumo = $pdi_pedido->getInsInsumo();

        $pdi_tipo_estado = $pdi_pedido->getPdiTipoEstado();
        $pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();
        $cantidad = $pdi_estado_actual->getCantidad();
        ?>
                            <tr class="tr-item uno" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>" pdi_pedido_id="<?php echo $pdi_pedido_id ?>">
                                <td align="center">
                            <?php Gral::_echo($cantidad); ?>
                                </td>
                                <td align="left">
                                    <div class="ins-insumo">
                            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                                    </div>

                                    <div class="tipo-estado">
                                        <img src='imgs/pdi_estado/<?php Gral::_echo($pdi_tipo_estado->getCodigo()) ?>.png' width='12' align='absmiddle' />
                                    <?php Gral::_echo($pdi_tipo_estado->getDescripcion()) ?>
                                    </div>    

                                    <div class="label-error" id="dbsug_ins_insumo_id_<?php echo $key ?>_error"></div>
                                </td>

                                <td align="center">
                                    <div class="codigo-interno">
                                        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
                                    </div>
                                </td>

                                <td align="center">
                                    <div class="marca">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getInsMarca()->getDescripcion() : '') ?>
                                    </div>
                                    <div class="codigo-marca">
                                        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
                                    </div>
                                </td>
                            </tr>
        <?php
    }
    ?>
                    </tbody>
                </table>
            </div>
    <?php
}
?>

                    <?php
                    if ($pdi_pedido_agrupacion_items) {
                        ?>
            <div class="div_listado_pdi_pedido_agrupacion_items" id="div_listado_pdi_pedido_agrupacion_items">
                <table class="listado_pdi_pedido_agrupacion_items" id="listado_pdi_pedido_agrupacion_items">
                    <thead>
                        <tr>
                            <th width='60' align='center'>Cant</th>
                            <th width='410' align='center'>Insumo</th>
                            <th width='100' align='center'>Cod Interno</th>
                            <th width='100' align='center'>Marca</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    foreach ($pdi_pedido_agrupacion_items as $pdi_pedido_agrupacion_item) {
        $ins_insumo = $pdi_pedido_agrupacion_item->getInsInsumo();
        $cantidad = $pdi_pedido_agrupacion_item->getCantidad();
        ?>
                            <tr class="tr-item uno" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>" pdi_pedido_id="<?php echo $pdi_pedido_id ?>">
                                <td align="center">
        <?php Gral::_echo($cantidad); ?>
                                </td>
                                <td align="left">
                                    <div class="ins-insumo">
                            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                                    </div>

                                    <div class="tipo-estado">

                                    </div>    

                                    <div class="label-error" id="dbsug_ins_insumo_id_<?php echo $key ?>_error"></div>
                                </td>

                                <td align="center">
                                    <div class="codigo-interno">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
                                    </div>
                                </td>

                                <td align="center">
                                    <div class="marca">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getInsMarca()->getDescripcion() : '') ?>
                                    </div>
                                    <div class="codigo-marca">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
                                    </div>
                                </td>
                            </tr>
        <?php
    }
    ?>
                    </tbody>
                </table>
            </div>
                                    <?php
                                }
                                ?>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_agrupacion_txa_observacion' rows='3' cols='35' id='pdi_pedido_agrupacion_txa_observacion' class='textbox'></textarea>
                <div class="error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton btn_guardar' value='<?php Lang::_lang('Anular Pedido Masivo') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pdi_pedido_agrupacion->getId() ?>' />

            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
        </div>
    </div>
</form>
