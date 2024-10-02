<?php if ($prv_proveedor && $pde_centro_pedido) { ?>

    <div class="col c1">
        <div class="par">
            <div class="label"><?php Lang::_lang('Descuento Financiero') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_prv_descuento_financiero_id', Gral::getCmbFiltro($prv_proveedor->getPrvDescuentoFinancierosCmb(), '...'), $cmb_prv_descuento_financiero_id, 'textbox') ?>
                <div class="label-error" id="cmb_prv_descuento_financiero_id_error"></div>
            </div>
        </div>
    </div>

    <div class="col c2">
        <div class="par">
            <div class="label"><?php Lang::_lang('IVA Incluido') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_iva_incluido', GralSiNo::getGralSiNosCmb(), $cmb_iva_incluido, 'textbox') ?>
                <div class="label-error" id="cmb_iva_incluido_error"></div>
            </div>
        </div>
    </div>

    <div class="div_listado_pde_oc_agrupacion_items" id="div_listado_pde_oc_agrupacion_items">
        <table class="listado_pde_oc_agrupacion_items" id="listado_pde_oc_agrupacion_items">
            <thead>
                <tr>
                    <th width='30' align='center'>#</th>
                    <th width='60' align='center'>Cant</th>
                    <th width='450' align='center'>Insumo</th>
                    <th width='80' align='center'>Costo <?php echo Gral::getConfig('gral_cliente_min') ?></th>
                    <th width='90' align='center'>Cto Unit OC</th>
                    <th width='90' align='center'>Desc Comer</th>
                    <th width='90' align='center'>Cto Tot OC</th>
                    <th width='50' align='center'>Afecta Costo</th>
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
                    $txt_importe_oc = $txt_importe_ocs[$key];

                    $prv_insumo = false;
                    $prv_insumo_costo_actual = false;

                    $insumo_id = $arr_insumo_seleccionados[$key]['ins_insumo_id'];
                    $cmb_prv_descuento_comercial_id = $cmb_prv_descuento_comercial_ids[$key];

                    $ins_insumo = InsInsumo::getOxId($insumo_id);
                    if ($ins_insumo) {
                        $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

                        // si hay insumo y proveedor, se busca el insumo de proveedor
                        if ($ins_insumo && $prv_proveedor) {
                            $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);

                            if ($prv_insumo) {
                                $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
                            }

                            if ($pde_oc_agrupacion_id != 0) {
                                
                            } else {
                                if ($prv_insumo) {
                                    $txt_importe_oc = $prv_insumo_costo_actual->getImporteBruto();
                                }
                            }

                            $importe_oc_con_descuento_comercial = PdeOcAgrupacion::getImporteConDescuentoComercial($cmb_prv_descuento_comercial_id, $txt_importe_oc);

                            $costo_total_unitario_oc_masivo += $txt_importe_oc;
                            $costo_total_unitario_oc_con_descuento_comercial_masivo += $importe_oc_con_descuento_comercial;
                            $costo_total_total_oc_masivo += $importe_oc_con_descuento_comercial * $txt_cantidad;
                        }
                    }
                    ?>
                    <tr class="tr-item" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>">
                    <?php include "modal_oc_agregar_masivo_item_uno.php"; ?>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>&nbsp;</th>
                    <th align='center'>
                        <div id="costo_total_unitario_oc_masivo" class="costo_total_unitario_oc_masivo"><?php Gral::_echoImp($costo_total_unitario_oc_masivo) ?></div>
                    </th>
                    <th align='center'>
                        <div id="costo_total_unitario_oc_con_descuento_comercial_masivo" class="costo_total_unitario_oc_con_descuento_comercial_masivo"><?php Gral::_echoImp($costo_total_unitario_oc_con_descuento_comercial_masivo) ?></div>                        
                    </th>
                    <th align='center'>
                        <div id="costo_total_total_oc_masivo" class="costo_total_total_oc_masivo"><?php Gral::_echoImp($costo_total_total_oc_masivo) ?></div>
                    </th>
                    <th align='center'>
                        <label class="boton agregar_item_oc" title="<?php Lang::_lang('Agregar Item') ?>">
                            <img src="imgs/btn_add.gif" width="25">
                        </label>
                    </th>
                    <th align='center'>&nbsp;</th>
                </tr>
            </tfoot>

        </table>
    </div>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('Debe seleccionar un proveedor y un centro de pedido') ?></div>
    </div> 
<?php } ?>
