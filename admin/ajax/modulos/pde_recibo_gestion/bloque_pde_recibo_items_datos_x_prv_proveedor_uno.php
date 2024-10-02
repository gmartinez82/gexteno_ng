<?php
include_once "_autoload.php";
?>

<tr class="tr-item" key = "<?php echo $key ?>">

    <td>
        <div class="pde_recibo_concepto">
            <?php
            $pde_recibo_concepto_id = $cmb_pde_recibo_concepto_ids[$key];
            Html::html_dib_select(1, "cmb_pde_recibo_concepto_id[" . $key . "]", Gral::getCmbFiltro(PdeReciboConcepto::getPdeReciboConceptosCmb(), '...'), $pde_recibo_concepto_id, 'textbox ' . $error_input_css);
            ?>
        </div>
        <div class="label-error" id="cmb_pde_recibo_concepto_id_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="descripcion">
            <input class="textbox" type="text" size="60" id="txt_descripcion_<?php echo $key ?>" name="txt_descripcion[<?php echo $key ?>]" value="<?php Gral::_echoTxt($txt_descripcions[$key]) ?>" />
        </div>
        <div class="label-error" id="txt_descripcion_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="referencia">
            <input class="textbox" type="text" size="20" id="txt_referencia_<?php echo $key ?>" name="txt_referencia[<?php echo $key ?>]" value="<?php Gral::_echoTxt($txt_referencias[$key]) ?>" />
        </div>
        <div class="label-error" id="txt_referencia_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="importe_unitario">
            $ <input class="moneda textbox" type="text" size="15" id="txt_importe_unitario_<?php echo $key ?>" name="txt_importe_unitario[<?php echo $key ?>]" value="<?php Gral::_echo($txt_importe_unitarios[$key]) ?>" />
        </div>
        <div class="label-error" id="txt_importe_unitario_<?php echo $key ?>_error"></div>
    </td>

    <td>
        <div class="gral_fp_forma_pago">
            <?php
            $gral_fp_forma_pago_id = $cmb_gral_fp_forma_pago_ids[$key];
            Html::html_dib_select(1, "cmb_gral_fp_forma_pago_id[" . $key . "]", Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbDeCobro(), '...'), $gral_fp_forma_pago_id, 'textbox gral_fp_forma_pago_id' . $error_input_css);
            ?>
            
            <label class="boton ver_modal_set_cheque_info" id="btn_ver_modal_set_cheque_info_<?php echo $key ?>" title="<?php Lang::_lang('Agregar Datos del Cheque') ?>" >
                <img src="imgs/btn_modi.gif" width="15">
            </label>
        </div>
        <div class="label-error" id="cmb_gral_fp_forma_pago_id_<?php echo $key ?>_error"></div>
        
    </td>

    <td>
        <label class="boton quitar_item_recibo" title="<?php Lang::_lang('Quitar Item al Recibo') ?>" key='<?php echo $key ?>'><img src="imgs/btn_cancelar.png" width="15"></label>
    </td>
</tr>

