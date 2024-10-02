<?php
include_once "_autoload.php";
?>

<tr class="tr-item" key = "<?php echo $key ?>">

    <td>
        <div class="vta_nota_debito_concepto">
            <?php
            $vta_nota_debito_concepto_id = $cmb_vta_nota_debito_concepto_ids[$key];
            Html::html_dib_select(1, "cmb_vta_nota_debito_concepto_id[" . $key . "]", Gral::getCmbFiltro(VtaNotaDebitoConcepto::getVtaNotaDebitoConceptosCmb(), '...'), $vta_nota_debito_concepto_id, 'textbox vta_nota_debito_concepto_id' . $error_input_css);
            ?>
        </div>
        <div class="label-error" id="cmb_vta_nota_debito_concepto_id_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="descripcion">
            <input class="textbox txt_descripcion" type="text" size="30" id="txt_descripcion_<?php echo $key ?>" name="txt_descripcion[<?php echo $key ?>]" value="<?php Gral::_echoTxt($txt_descripcions[$key]) ?>" />
        </div>
        <div class="label-error" id="txt_descripcion_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="gral_tipo_iva">
            <?php
            $gral_tipo_iva_id = $cmb_gral_tipo_iva_ids[$key];
            Html::html_dib_select(1, "cmb_gral_tipo_iva_id[" . $key . "]", Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $gral_tipo_iva_id, 'textbox gral_tipo_iva_id' . $error_input_css);
            ?>
        </div>
        <div class="label-error" id="cmb_gral_tipo_iva_id_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="importe_unitario">
            $ <input class="moneda txt_importe_unitario textbox" type="text" size="10" id="txt_importe_unitario_<?php echo $key ?>" name="txt_importe_unitario[<?php echo $key ?>]" value="<?php Gral::_echo($txt_importe_unitarios[$key]) ?>" />
        </div>
        <div class="label-error" id="txt_importe_unitario_<?php echo $key ?>_error"></div>
    </td>
    
    <td>
        <div class="importe_iva">
            $ <input class="moneda txt_importe_iva textbox" type="text" size="10" id="txt_importe_iva_<?php echo $key ?>" name="txt_importe_iva[<?php echo $key ?>]" value="<?php Gral::_echo($txt_importe_ivas[$key]) ?>" />
        </div>
        <div class="label-error" id="txt_importe_iva_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="importe_total">
            $ <input class="moneda txt_importe_total textbox" type="text" size="10" id="txt_importe_total_<?php echo $key ?>" name="txt_importe_total[<?php echo $key ?>]" value="<?php Gral::_echo($txt_importe_totals[$key]) ?>" />
        </div>
        <div class="label-error" id="txt_importe_total_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="aplica_percepcion_iibb">
            <?php
            $aplica_percepcion_iibb = $cmb_aplica_percepcion_iibb[$key];
            $aplica_percepcion_iibb = 1;
            Html::html_dib_select(1, "cmb_aplica_percepcion_iibb[" . $key . "]", GralSiNo::getGralSiNosCmb(), $aplica_percepcion_iibb, 'textbox aplica_percepcion_iibb' . $error_input_css);
            ?>
        </div>
        <div class="label-error" id="cmb_aplica_percepcion_iibb_id_<?php echo $key ?>_error"></div>
    </td>
    
    <td>
        <label class="boton quitar_item_nota_debito" title="<?php Lang::_lang('Quitar Item a Nota de Debito') ?>" key='<?php echo $key ?>'><img src="imgs/btn_cancelar.png" width="15"></label>
    </td>
</tr>

