<?php
include 'set_excel_variables.php';


//if ($col_nuevo_val == 1 || $col_modificado_val == 1 || $col_cancelado_val == 1) {
if ($col_nuevo_val == 1 || $col_modificado_val == 1) {

    $col_incremento_val = ($col_incremento_val == '') ? '-' : $col_incremento_val;
    $col_variacion_val = ($col_variacion_val == '') ? '-' : $col_variacion_val;

    if ($col_incremento_val < 0) {
        $insumo_nuevo_incremento_color = 'rojo';
    } elseif ($col_incremento_val == 0) {
        $insumo_nuevo_incremento_color = 'gris';
    } elseif ($col_incremento_val > 0 && $col_incremento_val <= 10) {
        $insumo_nuevo_incremento_color = 'verde';
    } else {
        $insumo_nuevo_incremento_color = 'amarillo';
    }

    if ($col_variacion_val < 0) {
        $insumo_incremento_color = 'rojo';
    } elseif ($col_variacion_val == 0) {
        $insumo_incremento_color = 'gris';
    } elseif ($col_variacion_val > 0 && $col_variacion_val <= 10) {
        $insumo_incremento_color = 'verde';
    } else {
        $insumo_incremento_color = 'amarillo';
    }
    ?>

    <tr id="tr_prv_insumo_<?php echo $row ?>" class="uno" identificador="<?php echo $row ?>">

        <td class="t3_td_nro_fila">
            <?php
            Gral::_echo($row - 1);
            ?>
        </td>

        <td class="t3_td_nuevo">
            <div class="check_nuevo">
                <?php
                if ($col_ins_insumo_id_val == 0 || $col_ins_matriz_id_val == 0) {
                    $col_nuevo_checked = ($col_nuevo_val) ? 'checked="checked"' : "";
                    ?>
                    <input type="checkbox" name="check_nuevo[]"  value="<?php echo $row ?>" <?php echo $col_nuevo_checked ?> disabled="true" >
                    <?php
                }
                ?>
            </div>
        </td>

        <td class="t3_td_id">
            <?php
            if ($col_ins_matriz_id_val == '0' && $col_ins_insumo_id_val == '0') {
                ?>
                <div class="amarillo">Nuevo</div>
                <?php
            } else if ($col_ins_insumo_id_val == '' && $col_ins_matriz_id_val == '') {
                ?>
                <div class="verde">Vincular</div>
                <?php
            } else if ($col_ins_insumo_id_val != '' && $col_ins_matriz_id_val == 0) {
                ?>
                <div class="rojo">
                    <?php //echo "Ins " . $col_ins_insumo_id_val;  ?>

                    <?php
                    $ins_insumo = InsInsumo::getOxId($col_ins_insumo_id_val);
                    ?>
                    <div class="avatar">
                        <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" title="<?php Gral::_echo($ins_insumo->getDescripcion()) ?>">
                            <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" width="30" alt="img-prd" />
                        </a>
                    </div>

                </div>
                <?php
            } else if ($col_ins_insumo_id_val != '') {
                ?>
                <div class="amarillo">
                    <?php $ins_insumo = InsInsumo::getOxId($col_ins_insumo_id_val); ?>

                    <div class="avatar">
                        <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" title="<?php Gral::_echo($ins_insumo->getDescripcion()) ?>">
                            <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" width="30" alt="img-prd" />
                        </a>
                    </div>

                </div>
                <?php
            } else {
                ?>
                <div class="rojo"><?php echo "Mat " . $col_ins_matriz_id_val; ?></div>
                <?php
            }
            ?>
        </td>

        <td class="t3_td_cod_proveedor"> 
            <?php echo $col_codigo_proveedor_val ?> 
        </td>

        <td class="t3_td_insumo">
            <?php $checked_seleccion = ($col_seleccion_val) ? 'checked="checked"' : "" ?>
            <input type="checkbox" name="check_seleccion[]"  value="<?php echo $row ?>" <?php echo $checked_seleccion ?> disabled="true" >

            <?php Gral::_echo($col_descripcion_val); ?>
        </td>

        <td class="t3_td_cod_marca">
            <select name="cmb_ins_marca_id[]" class="textbox cmb_marca marca" disabled="true">
                <option value="0"></option>
                <?php foreach ($ins_marcas as $ins_marca) {
                    $cmb_marca_selected = ($col_marca_id_val == $ins_marca->getId()) ? 'selected' : ''; ?>
                    <option value = "<?php echo $ins_marca->getId() ?>" <?php echo $cmb_marca_selected ?>><?php echo $ins_marca->getDescripcion() ?></option>
                    <?php } ?>
            </select>

            <div class="codigo marca">
                <input class="textbox_marca" name="codigo-marca[]" type="text" title="Cod. Marca" value="<?php Gral::_echo($col_codigo_marca_val); ?>" disabled="true">
            </div>
        </td> 

        <td class="t3_td_cod_pieza">
            <select name="cmb_pieza_id[]" class="textbox cmb_marca pieza" disabled="true">
                <option value="0"></option>
                <?php foreach ($ins_marcas as $ins_marca) {
                    $cmb_pieza_selected = ($col_marca_pieza_val == $ins_marca->getId()) ? 'selected' : ''; ?>
                    <option value = "<?php echo $ins_marca->getId() ?>" <?php echo $cmb_pieza_selected ?>><?php echo $ins_marca->getDescripcion() ?></option>
                    <?php } ?>
            </select>

            <div class="codigo pieza">
                <input class="textbox_pieza" name="codigo-pieza[]" type="text" title="Cod. OEM" value="<?php Gral::_echo($col_codigo_pieza_val); ?>" disabled="true">
            </div>
        </td>

        <td class="t3_td_nuevo_importe">
            <div class="nuevo_importe">
                <?php PrvInsumoExcel::_echoImp($col_importe_val) ?>
            </div>
        </td>

        <td class="t3_td_nuevo_descuento">
            <?php echo $col_descuento_val; ?> %
        </td>

        <td class="t3_td_nuevo_importe_neto">
            <div class="nuevo_importe_neto">
                <?php PrvInsumoExcel::_echoImp($col_importe_neto_val); ?>
            </div>
        </td>

        <td class="t3_td_ultimo_importe">
            <?php PrvInsumoExcel::_echoImp($col_ultimo_importe_val); ?>
        </td>

        <td class="t3_td_ultimo_fecha">
            <?php echo $col_fecha_importacion_val; ?>
        </td>

        <td class="t3_td_nuevo_incremento">
            <?php if ($col_incremento_val != '-') { ?>
                <div class="nuevo_incremento <?php echo $insumo_nuevo_incremento_color ?>">
                    <?php echo $col_incremento_val ?> %
                </div>
            <?php } else { ?>
                <?php echo $col_incremento_val ?>
            <?php } ?>
        </td>

        <td class="t3_td_insumo_importe">
            <?php PrvInsumoExcel::_echoImp($col_costo_actual_val) ?>
        </td>

        <td class="t3_td_insumo_incremento">
            <?php if ($col_variacion_val != '-') { ?>
                <div class="insumo_incremento <?php echo $insumo_incremento_color ?>">
                    <?php echo $col_variacion_val ?> %
                </div>
            <?php } else { ?>
                <?php echo $col_variacion_val ?>
            <?php } ?>
        </td>

        <td class="t3_td_insumo_accion">
            <?php $checked = ($col_actualizar_costo_val) ? 'checked="checked"' : "" ?>
            <input type="checkbox" name="check_actualizar_costo[]"  value="<?php echo $row ?>" <?php echo $checked ?> disabled="true" />    
        </td>

        <td class="t3_td_cancelar">
            <div class="cancelar_registro_list" >
                <?php $imagen = ($col_cancelado_val == 1) ? 'imgs/btn_elim.gif' : "imgs/btn_estado_1.gif" ?>
                <img src="<?php echo $imagen ?>" width='20' border='0' />
            </div>
        </td>

    </tr>
<?php } ?>