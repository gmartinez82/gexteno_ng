<?php
if ($insumo_seleccionado && $ins_insumo && $pan_panol) {
    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
    $cantidad_reservados = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol);
    ?>
    <h3><?php Gral::_echo($ins_insumo->getDescripcion()) ?></h3>
    <h4>Foto del Insumo</h4>
    <img src="<?php Gral::_echo($ins_insumo->getPathImagenPrincipal()) ?>" width="200" alt="imagen" />

    <h4>Stock de Insumo en "<strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>"</h4>

    <?php if ($ins_stock_resumen) { ?>
        <div class="par">
            <div class="label">Cantidad</div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getCantidad()) ?> <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>

                <?php if ($cantidad_reservados > 0) { ?>
                    <div class="reservados" title="+ <?php Gral::_echo($cantidad_reservados) ?> <?php Lang::_lang('Insumos Reservados') ?>">
                        + <?php Gral::_echo($cantidad_reservados) ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        El Insumo aun no tiene INICIALIZACION de Stock en <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
    <?php } ?>


<?php } else { ?>
    Seleccione un INSUMO para ver su STOCK
<?php } ?>

<div class="error insumo-identificado-label-error pdi_pedido_entrega_cantidad_stock_error"><?php Gral::_echo($bloque_stock_error) ?></div>
