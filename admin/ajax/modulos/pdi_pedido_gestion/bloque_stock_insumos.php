<?php
//Se realiza el control de si existen pedidos activos para el panol e insumo seleccionado
$insumo_seleccionado = false;
if ($ins_insumo->getId() != 'null') {
    $insumo_seleccionado = true;
}
?>
<div class="stock-insumo-panoles">
    <div class="titulo"><?php Lang::_lang('Disponibilidad en Panoles') ?></div>

    <div class="uno uno-encabezado">
        <div class="checkbox">&nbsp;</div>
        <div class="panol"><?php Lang::_lang('PanPanol') ?></div>
        <div class="cantidad"><?php Lang::_lang('Stock Activo') ?></div>
        <div class="punto-minimo"><?php Lang::_lang('Pto Min') ?></div>
        <div class="punto-pedido"><?php Lang::_lang('Pto Ped') ?></div>
        <div class="punto-maximo"><?php Lang::_lang('Pto Max') ?></div>
    </div>
    <?php
    //foreach($ins_stock_resumens as $ins_stock_resumen){
    foreach ($pan_panols as $pan_panol) {

        $uno_linea_seleccionable = '';
        $existe_disponibilidad_stock = false;

        if ($insumo_seleccionado) {
            $arr_puntos = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);
            $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);

            if ($ins_stock_resumen) { // si no entra al if no se inicializo resumen de insumo
                $rad_checked = ($pdi_pedido_rad_pan_panol_id == $pan_panol->getId()) ? 'checked="checked"' : '';

                if ($cantidad <= $ins_stock_resumen->getCantidad()) {
                    $existe_disponibilidad_stock = true;
                    $uno_linea_seleccionable = ($pan_panol->getId() != $pdi_pedido->getPanPanolOrigen()) ? 'seleccionable' : '';
                }
            }
        }
        ?>
        <div class="uno uno-linea <?php echo $uno_linea_seleccionable ?>" panol_id="<?php Gral::_echo($pan_panol->getId()) ?>">
            <div class="checkbox">
                <?php if ($insumo_seleccionado) { ?>
                    <?php if ($pan_panol->getId() != $pdi_pedido->getPanPanolOrigen()) { ?>
                        <?php //if ($pan_panol->getId() != $pdi_pedido->getPanPanolDestino()) { ?>
                            <?php //if($existe_disponibilidad_stock){ ?>
                            <?php if($ins_stock_resumen){  ?>
                            <input class="radio pdi_pedido_rad_pan_panol_id_<?php Gral::_echo($pan_panol->getId()) ?>" type="radio" id="pdi_pedido_rad_pan_panol_id" name="pdi_pedido_rad_pan_panol_id" value="<?php Gral::_echo($pan_panol->getId()) ?>" <?php echo $rad_checked ?> />
                            <?php } ?>
                        <?php //} ?>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="panol"><?php Gral::_echo($pan_panol->getDescripcion()) ?></div>

            <div class="cantidad activo">
                <?php if ($ins_stock_resumen) { ?>
                    <?php if ($insumo_seleccionado) { ?>
                        <strong><?php Gral::_echo($ins_stock_resumen->getCantidad()) ?></strong> <?php Gral::_echo($ins_stock_resumen->getInsInsumo()->getInsUnidadMedidaPedido()->getDescripcion()) ?>
                    <?php } else { ?>
                        <?php Lang::_lang('Debe seleccionar un Insumo') ?>
                    <?php } ?>
                <?php } else { ?>
                    <?php Lang::_lang('N/I') ?>
                <?php } ?>
            </div>

            <div class="punto-minimo">
                <?php if ($insumo_seleccionado) { ?>
                    <?php echo($arr_puntos[InsInsumo::PUNTO_MINIMO]) ?>
                <?php } ?>
            </div>

            <div class="punto-pedido">
                <?php if ($insumo_seleccionado) { ?>
                    <?php echo($arr_puntos[InsInsumo::PUNTO_PEDIDO]) ?>
                <?php } ?>
            </div>

            <div class="punto-maximo">
                <?php if ($insumo_seleccionado) { ?>
                    <?php echo($arr_puntos[InsInsumo::PUNTO_MAXIMO]) ?>
                <?php } ?>
            </div>

        </div>
    <?php } ?>
    <div class="error"><?php Gral::_echo($pdi_pedido_rad_pan_panol_id_error) ?></div>
</div>
