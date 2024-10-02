<div class="div_listado_pdi_pedido_agrupacion_items" id="div_listado_pdi_pedido_agrupacion_items">
    <table class="listado_pdi_pedido_agrupacion_items" id="listado_pdi_pedido_agrupacion_items">
        <thead>
            <tr>
                <th width='30' align='center'>#</th>
                <th width='30' align='center'>
                    <div class="checkbox">
                        <input type="checkbox" class="textbox chk_aceptar_all" id="chk_aceptar_all" name="chk_aceptar_all" value="1" />
                    </div>
                </th>
                <th width='60' align='center'>Cant</th>
                <th width='410' align='center'>Insumo</th>
                <th width='100' align='center'>Cod Interno</th>
                <th width='100' align='center'>Marca</th>
                <th width='110' align='center'>Stock en <?php Gral::_echo($pan_panol_origen->getDescripcion()) ?></th>
                <th width='110' align='center'>Stock en <?php Gral::_echo($pan_panol_destino->getDescripcion()) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($txt_cantidads as $key => $txt_cantidad_solicitado)
            {
                $pdi_pedido_id     = $arr_insumo_seleccionados[$key]['pdi_pedido_id'];
                $insumo_id         = $arr_insumo_seleccionados[$key]['ins_insumo_id'];
                $cantidad          = $arr_insumo_seleccionados[$key]['cantidad'];
                
                $pdi_pedido        = PdiPedido::getOxId($pdi_pedido_id);
                $ins_insumo        = InsInsumo::getOxId($insumo_id);
                
                $pdi_tipo_estado   = $pdi_pedido->getPdiTipoEstado();
                $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
                
                $ins_stock_resumen_origen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_origen);
                $ins_stock_resumen_destino = $ins_insumo->getInsStockResumenEnPanol($pan_panol_destino);
            ?>
                <tr class="tr-item uno" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>" pdi_pedido_id="<?php echo $pdi_pedido_id ?>">
                    <?php include "modal_pdi_pedido_aceptar_masivo_item_uno.php"; ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
            </tr>
        </tfoot>
    </table>
</div>