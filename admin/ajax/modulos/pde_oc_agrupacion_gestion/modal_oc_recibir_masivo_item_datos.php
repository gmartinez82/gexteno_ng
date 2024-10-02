<?php if ($prv_proveedor) { ?>
    <div class="div_listado_pde_oc_agrupacion_items" id="div_listado_pde_oc_agrupacion_items">
        <table class="listado_pde_oc_agrupacion_items" id="listado_pde_oc_agrupacion_items">
            <thead>
                <tr>
                    <th width='30' align='center'>#</th>
                    <th width='30' align='center'>
                        <div class="checkbox">
                            <input type="checkbox" class="textbox chk_recibir_all" id="chk_recibir_all" name="chk_recibir_all" value="1" />
                        </div>
                    </th>
                    <th width='60' align='center'>Cant</th>
                    <th width='410' align='center'>Insumo</th>
                    <th width='100' align='center'>Cod Interno</th>
                    <th width='100' align='center'>Marca</th>
                    <th width='80' align='center'>Costo <?php echo Gral::getConfig('gral_cliente_min') ?></th>
                    <th width='20' align='center'>Ref</th>
                    <th width='40' align='center'>%</th>
                    <th width='120' align='center'>Cto Unit Prv</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($txt_cantidads as $key => $txt_cantidad_recibir) {
                    $pde_oc_id = $arr_insumo_seleccionados[$key]['pde_oc_id'];
                    $insumo_id = $arr_insumo_seleccionados[$key]['ins_insumo_id'];

                    $pde_oc = PdeOc::getOxId($pde_oc_id);
                    $ins_insumo = InsInsumo::getOxId($insumo_id);

                    $pde_oc_tipo_estado = $pde_oc->getPdeOcTipoEstado();
                    $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();

                    $cantidad = $pde_oc->getCantidad();
                    $cantidad_total_recibida = $pde_oc->getCantidadTotalRecibida();

                    $txt_cantidad_recibir = $cantidad - $cantidad_total_recibida;
                    
                    /*
                    if ($ins_insumo) {
                        $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

                        // si hay insumo y proveedor, se busca el insumo de proveedor
                        if ($ins_insumo && $prv_proveedor) {
                            $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);
                            if ($prv_insumo) {
                                $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();

                                $costo_total_unitario_oc_masivo += $prv_insumo_costo_actual->getImporteNeto();
                                $costo_total_total_oc_masivo += $prv_insumo_costo_actual->getImporteNeto() * $txt_cantidad;
                            }
                        }
                    }
                    */
                    ?>
                    <tr class="tr-item uno" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>" pde_oc_id="<?php echo $pde_oc_id ?>">
                        <?php include "modal_oc_recibir_masivo_item_uno.php"; ?>
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
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                </tr>
            </tfoot>

        </table>
    </div>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('Debe seleccionar un proveedor') ?></div>
    </div> 
<?php } ?>
