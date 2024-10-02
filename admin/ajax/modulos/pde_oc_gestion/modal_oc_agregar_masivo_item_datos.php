<?php if ($prv_proveedor) { ?>
    <table class="listado_pde_oc_items" id="listado_pde_oc_items">
        <thead>
            <tr>
                <th width='60' align='center'>Cant</th>
                <th width='380' align='center'>Insumo</th>
                <th width='100' align='center'>Cod Interno</th>
                <th width='100' align='center'>Marca</th>
                <th width='80' align='center'>Costo <?php echo Gral::getConfig('gral_cliente_min') ?></th>
                <th width='100' align='center'>Cod Prv</th>
                <th width='20' align='center'>Ref</th>
                <th width='40' align='center'>%</th>
                <th width='80' align='center'>Cto Unit Prv</th>
                <th width='90' align='center'>Cto Tot Prv</th>
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
                //$insumo_id = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
                $insumo_id = $arr_insumo_seleccionados[$key]['ins_insumo_id'];

                $ins_insumo = InsInsumo::getOxId($insumo_id);
                
                if ($ins_insumo) {
                    $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

                    // si hay insumo y proveedor, se busca el insumo de proveedor
                    if ($ins_insumo && $prv_proveedor) {
                        $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);
                        if ($prv_insumo) {
                            $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
                            
                            $costo_total_unitario_oc_masivo+= $prv_insumo_costo_actual->getImporteNeto();
                            $costo_total_total_oc_masivo+= $prv_insumo_costo_actual->getImporteNeto() * $txt_cantidad;
                        }
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
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>&nbsp;</th>
                <th align='center'>
                    <div id="costo_total_unitario_oc_masivo" class="costo_total_unitario_oc_masivo"><?php Gral::_echoImp($costo_total_unitario_oc_masivo) ?></div>
                </th>
                <th align='center'>
                    <div id="costo_total_total_oc_masivo" class="costo_total_total_oc_masivo"><?php Gral::_echoImp($costo_total_total_oc_masivo) ?></div>
                </th>
                <th align='center'>&nbsp;</th>
            </tr>
        </tfoot>

    </table>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('Debe seleccionar un proveedor') ?></div>
    </div> 
<?php } ?>
