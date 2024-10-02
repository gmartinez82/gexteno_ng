<?php
include 'set_excel_variables.php';

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

$cantidad_sugerencias = PrvInsumoExcel::getCantidadSugerencia($col_descripcion_val, $col_codigo_marca_val, $col_codigo_pieza_val, $col_codigo_proveedor_val);

$alerta = false;
$class_alerta = '';
$class_descripcion_ins_insumo_duplicada = '';
$class_descripcion_ins_matriz_duplicada = '';

if ($col_nuevo_val > 0) {
    $ins_insumo_descripcion_duplicados = InsInsumo::controlDescripcionInsInsumoDuplicado($col_descripcion_val);
    
    $control_descripcion_matriz = ($col_descripcion_matriz_val != '') ? $col_descripcion_matriz_val : $col_descripcion_val;
    $ins_matriz_descripcion_duplicadas = InsInsumo::controlDescripcionInsMatrizDuplicada($control_descripcion_matriz);
    
    $marca_id_cod_marca_duplicadas = InsInsumo::controlCombinacionInsMarcaIdCodMarcaDuplicada($col_codigo_marca_val, $col_marca_id_val);
    $marca_id_cod_oem_duplicadas = InsInsumo::controlCombinacionInsMarcaIdCodOemDuplicada($col_codigo_pieza_val, $col_marca_pieza_val);

    if (count($ins_insumo_descripcion_duplicados) > 0) {
        $class_descripcion_ins_insumo_duplicada = 't3_td_alerta_ins_insumo_descripcion';
        $title_descripcion_ins_insumo_duplicada = Lang::_lang('Ya existe un INSUMO con este nombre', true);
        $alerta = true;
    }
    
    if (count($ins_matriz_descripcion_duplicadas) > 0) {
        $class_descripcion_ins_matriz_duplicada = 't3_td_alerta_ins_matriz_descripcion';
        $title_descripcion_ins_matriz_duplicada = Lang::_lang('Ya existe una MATRIZ con este nombre', true);
        $alerta = true;
    }
    if ($marca_id_cod_marca_duplicadas) {
        $class_marca_id_cod_marca_duplicada = 't3_td_alerta_marca_id_cod_marca';
        $title_marca_id_cod_marca_duplicada = Lang::_lang('Ya existe un INSUMO con este codigo y marca', true);
        $alerta = true;
    }
    if ($marca_id_cod_oem_duplicadas) {
        $class_marca_id_cod_oem_duplicada = 't3_td_alerta_marca_id_cod_oem';
        $title_marca_id_cod_oem_duplicada = Lang::_lang('Ya existe una MATRIZ con este codigo y marca', true);
        $alerta = true;
    }
//    if (count($marca_id_cod_marca_duplicadas) > 0) {
//        $class_marca_id_cod_marca_duplicada = 't3_td_alerta_marca_id_cod_marca';
//        $alerta = true;
//    }
//    if (count($marca_id_cod_oem_duplicadas) > 0) {
//        $class_marca_id_cod_oem_duplicada = 't3_td_alerta_marca_id_cod_oem';
//        $alerta = true;
//    }

    if ($alerta) {
        $class_alerta = 't3_td_alerta';
    }
}

?>
<td class="t3_td_nro_fila <?php echo $class_alerta; ?>">
    <?php Gral::_echo($row - 1); ?>
</td>
<td class="t3_td_nuevo <?php echo $class_alerta; ?>">
    <div class="check_nuevo">
        <?php
        if (!($col_ins_insumo_id_val > 0 || $col_ins_matriz_id_val > 0)) {
            $checked_nuevo = ($col_nuevo_val) ? 'checked="checked"' : ""
            ?>
            <input type="checkbox" name="check_nuevo[]"  value="<?php echo $row ?>" <?php echo $checked_nuevo ?> />            
            <?php
        }
        ?>
    </div>
</td>
<td class="t3_td_id <?php echo $class_alerta; ?>">
    <?php if ($col_ins_matriz_id_val == '0' && $col_ins_insumo_id_val == '0') { ?>
        <div class="btn_ver_modal amarillo">Nuevo</div>

        <?php if ($cantidad_sugerencias > 0) { ?>
            <div class="cantidad-sugerencias" title="Existen <?php echo $cantidad_sugerencias ?> Sugerencias"><?php echo $cantidad_sugerencias ?></div>
        <?php } ?>

    <?php } else if ($col_ins_insumo_id_val == '' && $col_ins_matriz_id_val == '') { ?>
        <div class="btn_ver_modal verde">Vincular</div>

        <?php if ($cantidad_sugerencias > 0) { ?>
            <div class="cantidad-sugerencias" title="Existen <?php echo $cantidad_sugerencias ?> Sugerencias"><?php echo $cantidad_sugerencias ?></div>
        <?php } ?>

    <?php } else if ($col_ins_insumo_id_val != '' && $col_ins_matriz_id_val == 0) { ?>
        <div class="btn_ver_modal rojo">
            <?php $ins_insumo = InsInsumo::getOxId($col_ins_insumo_id_val); ?>
            <div class="avatar">
                <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" title="<?php Gral::_echo($ins_insumo->getDescripcion()) ?>">
                    <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" width="30" alt="img-prd" />
                </a>
            </div>
            <?php if ($cantidad_sugerencias > 0) { ?>
                <div class="cantidad-sugerencias" title="Existen <?php echo $cantidad_sugerencias ?> Sugerencias"><?php echo $cantidad_sugerencias ?></div>
            <?php } ?>
        </div>

    <?php } else if ($col_ins_insumo_id_val != '' && $col_modificado_val == 1) { ?>
        <div class="amarillo">
            <?php $ins_insumo = InsInsumo::getOxId($col_ins_insumo_id_val); ?>
            <div class="avatar">
                <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" title="<?php Gral::_echo($ins_insumo->getDescripcion()) ?>">
                    <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" width="30" alt="img-prd" />
                </a>
            </div>
        </div>
    <?php } else if ($col_ins_insumo_id_val != '' && $col_modificado_val == 0) { ?>
        <div class="amarillo">
            <?php $ins_insumo = InsInsumo::getOxId($col_ins_insumo_id_val); ?>
            <div class="avatar">
                <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" title="<?php Gral::_echo($ins_insumo->getDescripcion()) ?>">
                    <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" width="30" alt="img-prd" />
                </a>
            </div>
        </div>
    <?php } else { ?>
        <div class="btn_ver_modal rojo">
            <?php //echo "Mat " . $col_ins_matriz_id_val;  ?>
            <?php
            $ins_matriz = InsMatriz::getOxId($col_ins_matriz_id_val);
            if ($ins_matriz) {
                ?>
                <div class="avatar">
                    <a href="<?php echo $ins_matriz->getPathImagenPrincipal() ?>" title="<?php Gral::_echo($ins_matriz->getDescripcion()) ?>">
                        <img src="<?php echo $ins_matriz->getPathImagenPrincipal(true) ?>" width="30" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
            <?php if ($cantidad_sugerencias > 0) { ?>
                <div class="cantidad-sugerencias" title="Existen <?php echo $cantidad_sugerencias ?> Sugerencias"><?php echo $cantidad_sugerencias ?></div>
            <?php } ?>
        </div>
    <?php } ?>
</td>

<td class="t3_td_cod_proveedor <?php echo $class_alerta; ?>"> 
    <?php Gral::_echo($col_codigo_proveedor_val) ?> 
</td>


<td class="t3_td_insumo <?php echo $class_alerta; ?>" >
    <?php $checked_seleccion = ($col_actualiza_descripcion_val) ? 'checked="checked"' : "" ?>
    <input class="check_descripcion" type="checkbox" name="check_seleccion[]" title="<?php Gral::_echo($col_descripcion_matriz_val) ?>" value="<?php echo $row ?>" <?php echo $checked_seleccion ?> />    

    <label class="<?php echo $class_descripcion_ins_insumo_duplicada; ?>" title="<?php echo ($class_descripcion_ins_insumo_duplicada != '') ? $title_descripcion_ins_insumo_duplicada : '' ?>">
        <?php Gral::_echo($col_descripcion_val); ?>
        <img class="descripcion_insumo" src="imgs/btn_modi.gif" width="15" alt="btn-editar" />
    </label>   

    <?php if ($col_nuevo_val == 1 && $col_descripcion_matriz_val != '') { ?>
        <br /><br />
        <label class="insumo-matriz-descripcion <?php echo $class_descripcion_ins_matriz_duplicada; ?>" title="<?php echo ($class_descripcion_ins_insumo_duplicada != '') ? $title_descripcion_ins_insumo_duplicada : 'Descripcion de Matriz' ?>">
            <?php Gral::_echo($col_descripcion_matriz_val); ?>
        </label>
        <br /><br />
    <?php } ?>

</td>

<td class="t3_td_cod_marca <?php echo $class_alerta . ' ' . $class_marca_id_cod_marca_duplicada; ?>" title="<?php echo ($class_marca_id_cod_marca_duplicada != '') ? $title_marca_id_cod_marca_duplicada : '' ?>">

    <?php $cmb_ins_marca_id = ($col_marca_id_val == '') ? $web_ins_marca_id : $col_marca_id_val; ?>
    <?php Html::html_dib_select(1, 'cmb_ins_marca_id_'.$row, Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $cmb_ins_marca_id, 'textbox cmb_marca marca' . $error_input_css) ?>

    <br />
    <input class="codigo marca" name="codigo-marca[]" type="text" title="Cod. Marca" value="<?php Gral::_echo($col_codigo_marca_val); ?>">
</td> 

<td class="t3_td_cod_pieza <?php echo $class_alerta . ' ' . $class_marca_id_cod_oem_duplicada; ?>" title="<?php echo ($class_marca_id_cod_oem_duplicada != '') ? $title_marca_id_cod_marca_duplicada : '' ?>">

    <?php $cmb_pieza_id = ($col_marca_pieza_val == '') ? $web_pieza_id : $col_marca_pieza_val; ?>
    <?php Html::html_dib_select(1, 'cmb_pieza_id_'.$row, Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $cmb_pieza_id, 'textbox cmb_marca pieza' . $error_input_css) ?>

    <br />
    <input class="codigo pieza" name="codigo-pieza[]" type="text" title="Cod. OEM" value="<?php Gral::_echo($col_codigo_pieza_val); ?>">
</td>

<td class="t3_td_nuevo_importe <?php echo $class_alerta; ?>">
    <div class="nuevo_importe">
        <?php PrvInsumoExcel::_echoImp($col_importe_val) ?>
    </div>
</td>

<td class="t3_td_nuevo_descuento <?php echo $class_alerta; ?>">
    <?php echo $col_descuento_val; ?> %
</td>

<td class="t3_td_nuevo_importe_neto <?php echo $class_alerta; ?>">
    <div class="nuevo_importe_neto">
        <?php PrvInsumoExcel::_echoImp($col_importe_neto_val); ?>
    </div>
</td>

<td class="t3_td_ultimo_importe <?php echo $class_alerta; ?>">
    <?php PrvInsumoExcel::_echoImp($col_ultimo_importe_val); ?>
</td>

<td class="t3_td_ultimo_fecha <?php echo $class_alerta; ?>">
    <?php echo $col_fecha_importacion_val; ?>
</td>

<td class="t3_td_nuevo_incremento <?php echo $class_alerta; ?>">
    <?php if ($col_incremento_val != '-') { ?>
        <div class="nuevo_incremento <?php echo $insumo_nuevo_incremento_color ?>">
            <?php echo $col_incremento_val ?> %
        </div>
    <?php } else { ?>
        <?php echo $col_incremento_val ?>
    <?php } ?>
</td>

<td class="t3_td_insumo_importe <?php echo $class_alerta; ?>">
    <?php PrvInsumoExcel::_echoImp($col_costo_actual_val) ?>
</td>

<td class="t3_td_insumo_incremento <?php echo $class_alerta; ?>">
    <?php if ($col_variacion_val != '-') { ?>
        <div class="insumo_incremento <?php echo $insumo_incremento_color ?>">
            <?php echo $col_variacion_val ?> %
        </div>
    <?php } else { ?>
        <?php echo $col_variacion_val ?>
    <?php } ?>
</td>

<td class="t3_td_insumo_accion <?php echo $class_alerta; ?>">
    <div class="check_actualizar">
        <?php if ($col_proveedor_referencial_val){ ?>
        <img class="referencial" src="imgs/btn_importe.png" width="12" alt="hab" title="Es proveedor referencial de precios" />                    
        <?php } ?>
        
        <?php if ($col_ins_insumo_id_val > 0) { ?>

            <?php $checked = ($col_actualizar_costo_val) ? 'checked="checked"' : "" ?>        
            <input type="checkbox" name="check_actualizar_costo[]"  value="<?php echo $row ?>" <?php echo $checked ?> <?php echo $disabled ?>/>    
        <?php } ?>
    </div>
</td>

<td class="t3_td_cancelar <?php echo $class_alerta; ?>">
    <div class="cancelar_registro" >
        <?php $imagen = ($col_cancelado_val == 1) ? 'imgs/btn_elim.gif' : "imgs/btn_estado_1.gif" ?>
        <img src="<?php echo $imagen ?>" width='15' border='0' />
    </div>
</td>
