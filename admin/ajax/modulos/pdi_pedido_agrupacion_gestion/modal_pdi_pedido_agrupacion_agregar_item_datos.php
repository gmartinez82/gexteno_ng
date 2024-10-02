<?php if ($pan_panol_origen /*&& $pan_panol_destino*/) { ?>

    <div class="div_listado_pdi_pedido_agrupacion_items" id="div_listado_pdi_pedido_agrupacion_items">
        <table class="listado_pdi_pedido_agrupacion_items" id="listado_pdi_pedido_agrupacion_items">
            <thead>
                <tr>
                    <th width='30' align='center'>#</th>
                    <th width='60' align='center'>Cant</th>
                    <th width='500' align='center'>Insumo</th>
                    <th width='100' align='center'>Cod Interno</th>
                    <th width='100' align='center'>Marca</th>
                    <th>
                        <label class="boton agregar_item_oc" title="<?php Lang::_lang('Agregar Item') ?>">
                            <img src="imgs/btn_add.gif" width="25">
                        </label>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($txt_cantidads as $key => $txt_cantidad) {

                    $insumo_id = $arr_insumo_seleccionados[$key]['ins_insumo_id'];
                    $ins_insumo = InsInsumo::getOxId($insumo_id);

                    // se consultan los pedidos PDI activos
                    $pdi_pedidos_activos = PdiPedido::getPdiPedidosActivos($pan_panol_origen->getId(), $ins_insumo->getId());
        
                    //se consultan los pedidos items PDI activos
                    $pdi_pedido_agrupacion_items = PdiPedidoAgrupacion::getPdiPedidoAgrupacionItemsActivos($pan_panol_origen->getId(), $ins_insumo->getId(), $pdi_pedido_agrupacion_id);

                ?>
                    <tr class="tr-item" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>">
                    <?php include "modal_pdi_pedido_agrupacion_agregar_item_uno.php"; ?>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>
                        <label class="boton agregar_item_oc" title="<?php Lang::_lang('Agregar Item') ?>">
                            <img src="imgs/btn_add.gif" width="25">
                        </label>
                    </th>
                </tr>
            </tfoot>

        </table>
    </div>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('Debe seleccionar origen y destino') ?></div>
    </div> 
<?php } ?>
