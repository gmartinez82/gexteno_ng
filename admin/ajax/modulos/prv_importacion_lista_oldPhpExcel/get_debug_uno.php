<tr id="tr_prv_insumo_<?php echo $row ?>" class="uno" identificador="<?php echo $row ?>">

            <td class="t3_td_nro_fila_debug">
                <?php Gral::_echo($row - 1); ?>
            </td>

            <td class="t3_td_prv_insumo_id_debug"> 
                <?php Gral::_echo($col_prv_insumo_id_val) ?> 
            </td>

            <td class="t3_td_ins_insumo_id_debug"> 
                <?php Gral::_echo($col_ins_insumo_id_val) ?> 
            </td>

            <td class="t3_td_ins_matriz_id_debug"> 
                <?php Gral::_echo($col_ins_matriz_id_val) ?> 
            </td>

            <td class="t3_td_cod_proveedor_debug"> 
                <?php Gral::_echo($col_codigo_proveedor_val) ?> 
            </td>

            <td class="t3_td_actualiza_descripcion_debug">
                <?php $checked_seleccion = ($col_actualiza_descripcion_val) ? 'checked="checked"' : ""; ?>
                <input class="check_descripcion_debug" type="checkbox" name="check_seleccion[]" title="<?php Gral::_echo($col_descripcion_matriz_val) ?>" value="<?php echo $row ?>" <?php echo $checked_seleccion ?>/>    
            </td>

            <td class="t3_td_descripcion_debug">
                <div class="descripcion_insumo_debug" >
                    <?php Gral::_echo($col_descripcion_val); ?>
                </div>
            </td>
            <td class="t3_td_descripcion_matriz_debug">
                <div class="descripcion_matriz_debug" >
                    <?php Gral::_echo($col_descripcion_matriz_val); ?>
                </div>
            </td>

            <td class="t3_td_nuevo_importe_debug">
                <div class="nuevo_importe_debug">
                    <?php Gral::_echo($col_importe_val) ?>
                </div>
            </td>

            <td class="t3_td_nuevo_descuento_debug">
                <?php Gral::_echo($col_descuento_val); ?> 
            </td>

            <td class="t3_td_nuevo_importe_neto_debug">
                <div class="nuevo_importe_neto_debug">
                    <?php Gral::_echo($col_importe_neto_val); ?>
                </div>
            </td>

            <td class="t3_td_ultimo_importe_debug">
                <?php Gral::_echo($col_ultimo_importe_val); ?>
            </td>

            <td class="t3_td_ultimo_fecha_debug">
                <?php Gral::_echo($col_fecha_importacion_val); ?>
            </td>

            <td class="t3_td_nuevo_incremento_debug">
                <?php Gral::_echo($col_incremento_val); ?>
            </td>

            <td class="t3_td_insumo_costo_actual_debug">
                <?php Gral::_echo($col_costo_actual_val) ?>
            </td>

            <td class="t3_td_insumo_incremento_debug">
                <?php Gral::_echo($col_variacion_val); ?>
            </td>

            <td class="t3_td_insumo_accion_debug">
                <div class="check_actualizar_debug">
                    <?php $checked = ($col_actualizar_costo_val) ? 'checked="checked"' : "" ?>
                    <input type="checkbox" name="check_actualizar_costo[]"  value="<?php echo $row ?>" <?php echo $checked ?> />    
                </div>
            </td>

            <td class="t3_td_marca_id_debug">
                <?php Gral::_echo($col_marca_id_val); ?>
            </td> 

            <td class="t3_td_cod_marca_debug">
                <div class="codigo marca_debug">
                    <?php Gral::_echo($col_codigo_marca_val); ?>
                </div>
            </td> 

            <td class="t3_td_marca_pieza_debug">
                <?php Gral::_echo($col_marca_pieza_val); ?>
            </td>

            <td class="t3_td_cod_pieza_debug">
                <div class="codigo pieza_debug">
                    <?php Gral::_echo($col_codigo_pieza_val); ?>
                </div>
            </td>

            <td class="t3_td_nuevo_debug">
                <div class="check_nuevo_debug">
                    <?php $checked_nuevo = ($col_nuevo_val) ? 'checked="checked"' : ""; ?>
                    <input type="checkbox" name="check_nuevo[]"  value="<?php echo $row ?>" <?php echo $checked_nuevo ?> />            
                </div>
            </td>

            <td class="t3_td_modificado_debug">
                <div class="check_modificado_debug">
                    <?php $checked_modificado = ($col_modificado_val) ? 'checked="checked"' : ""; ?>
                    <input type="checkbox" name="check_nuevo[]"  value="<?php echo $row ?>" <?php echo $checked_modificado ?> />            
                </div>
            </td>


            <td class="t3_td_cancelar_debug">
                <div class="cancelar_registro_debug" >
                    <?php $imagen = ($col_cancelado_val == 1) ? 'imgs/btn_elim.gif' : "imgs/btn_estado_1.gif" ?>
                    <img src="<?php echo $imagen ?>" width='20' border='0'/>
                </div>
            </td>

        </tr>