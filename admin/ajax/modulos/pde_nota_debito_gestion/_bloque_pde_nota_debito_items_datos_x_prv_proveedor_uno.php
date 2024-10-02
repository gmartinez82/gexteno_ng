<?php
//if (!isset($pde_nota_debito_items[$key])) {
//    $pde_nota_debito_items[$key] = 1;
//}
if (!count($pde_nota_debito_items)>0) {
    $key = 1;
}
?>

<td>
    <div class="cantidad">
        <input step = "1" min="1" max="" type="text" id="txt_cantidad_<?php echo $key ?>" name="pde_nota_debito_item[<?php echo $key ?>]['cantidad']" value="<?php Gral::_echo($pde_nota_debito_item[$key]['cantidad']) ?>" size="3" class="textbox spinner spinner_cantidad" />
    </div>
    <div class="label-error" id="txt_cantidad_<?php echo $key ?>_error"></div>
</td>

<td>
    <div class="descripcion">
        <input type="text" size="30" id="txt_descripcion_<?php echo $key ?>" name="pde_nota_debito_item[<?php echo $key ?>]['descripcion']" value="<?php Gral::_echoTxt($pde_nota_debito_item[$key]['descripcion']) ?>" />
    </div>
    <div class="label-error" id="txt_descripcion_<?php echo $key ?>_error"></div>
</td>

<td>
    <div class="gral_tipo_iva">
        <?php
//        $gral_tipo_iva_id = $cmb_gral_tipo_iva_ids[$key];
        //$gral_tipo_iva_id = $pde_nota_debito_items[$key]['gral_tipo_iva_id'];
        //Html::html_dib_select(1, "pde_nota_debito_item[" . $key . "]['gral_tipo_iva_id']", Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $gral_tipo_iva_id, 'textbox ' . $error_input_css);
        ?>
    </div>
    <div class="label-error" id="cmb_gral_tipo_iva_id_<?php echo $key ?>_error"></div>
</td>

<td>
    <div class="importe_unitario">
        $<input class="moneda-no-anda" align="right" type="text" size="10" id="txt_importe_unitario_<?php echo $key ?>" name="pde_nota_debito_item[<?php echo $key ?>]['importe_unitario']" value="<?php Gral::_echo($pde_nota_debito_item[$key]['importe_unitario']) ?>" />
    </div>
    <div class="label-error" id="txt_importe_unitario_<?php echo $key ?>_error"></div>
</td>


