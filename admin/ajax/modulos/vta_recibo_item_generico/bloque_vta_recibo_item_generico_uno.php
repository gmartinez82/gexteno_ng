<tr class="tr-item" key = "<?php echo $key ?>">

    <td>
        <div class="vta_recibo_item_generico_vta_recibo_concepto">
            <?php
            //$vta_recibo_concepto_id = $cmb_vta_recibo_concepto_ids[$key];
            Html::html_dib_select(1, "cmb_vta_recibo_item_generico_vta_recibo_concepto_id_" . $key, Gral::getCmbFiltro(VtaReciboConcepto::getVtaReciboConceptosCmb(), '...'), $cmb_vta_recibo_item_generico_vta_recibo_concepto_id, 'textbox cmb_vta_recibo_item_generico_vta_recibo_concepto_id' . $error_input_css, "", "", "cmb_vta_recibo_item_generico_vta_recibo_concepto_id[" . $key . "]");
            ?>
            <label class="boton ver_modal_set_retencion_info" id="btn_ver_modal_set_retencion_info_<?php echo $key ?>" title="<?php Lang::_lang('Agregar Datos de la Retencion') ?>" >
                <img src="imgs/btn_modi.gif" width="15">
            </label>
        </div>
        <div id="cmb_vta_recibo_item_generico_vta_recibo_concepto_id_<?php echo $key ?>_error" class="label-error" ></div>
    </td>

    <td>
        <div class="vta_recibo_item_generico_descripcion">
            <input id="txt_vta_recibo_item_generico_descripcion_<?php echo $key ?>" name="txt_vta_recibo_item_generico_descripcion[<?php echo $key ?>]" class="textbox" type="text" size="35" value="<?php Gral::_echoTxt($txt_vta_recibo_item_generico_descripcion) ?>" />
        </div>
        <div id="txt_vta_recibo_item_generico_descripcion_<?php echo $key ?>_error" class="label-error"></div>
    </td>

    <td>
        <div class="vta_recibo_item_generico_referencia">
            <input id="txt_vta_recibo_item_generico_referencia_<?php echo $key ?>" name="txt_vta_recibo_item_generico_referencia[<?php echo $key ?>]" class="textbox" type="text" size="10"  value="<?php Gral::_echoTxt($txt_vta_recibo_item_generico_referencia) ?>" />
        </div>
        <div id="txt_vta_recibo_item_generico_referencia_<?php echo $key ?>_error" class="label-error" ></div>
    </td>
    
    <td>
        <div class="vta_recibo_item_generico_importe_unitario">
            <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_GENERICO_ACCION_OPERAR_MULTIMONEDA')) { ?>            
            <?php
            Html::html_dib_select(1, "cmb_vta_recibo_item_generico_gral_moneda_id_".$key, GralMoneda::getGralMonedasActivasMinCmb(), $cmb_vta_recibo_item_generico_gral_moneda_id, 'textbox cmb_vta_recibo_item_generico_gral_moneda_id' . $error_input_css, "", "", "cmb_vta_recibo_item_generico_gral_moneda_id[" . $key . "]");
            ?>
            <?php } ?>
            <input id="txt_vta_recibo_item_generico_importe_unitario_real_<?php echo $key ?>" name="txt_vta_recibo_item_generico_importe_unitario_real[<?php echo $key ?>]" class="moneda textbox txt_vta_recibo_item_generico_importe_unitario_real" type="text" size="12"  value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($txt_vta_recibo_item_generico_importe_unitario)) ?>" />
            <input id="txt_vta_recibo_item_generico_importe_unitario_<?php echo $key ?>" name="txt_vta_recibo_item_generico_importe_unitario[<?php echo $key ?>]" class="moneda textbox txt_vta_recibo_item_generico_importe_unitario" type="hidden" size="12"  value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($txt_vta_recibo_item_generico_importe_unitario)) ?>" />
        </div>
        <div id="txt_vta_recibo_item_generico_importe_unitario_<?php echo $key ?>_comentario" class="label-comentario"></div>
        <div id="txt_vta_recibo_item_generico_importe_unitario_<?php echo $key ?>_error" class="label-error"></div>
    </td>

    <td>
        <div class="vta_recibo_item_generico_gral_fp_forma_pago">
            <?php
            Html::html_dib_select(1, "cmb_vta_recibo_item_generico_gral_fp_forma_pago_id_" . $key, Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbDeCobro(), '...'), $cmb_vta_recibo_item_generico_gral_fp_forma_pago_id, 'textbox cmb_vta_recibo_item_generico_gral_fp_forma_pago_id' . $error_input_css, "", "", "cmb_vta_recibo_item_generico_gral_fp_forma_pago_id[" . $key . "]");
            ?>
            
            <label  id="btn_ver_modal_set_cheque_info_<?php echo $key ?>" class="boton ver_modal_set_cheque_info" title="<?php Lang::_lang('Agregar Datos del Cheque') ?>" >
                <img src="imgs/btn_modi.gif" width="15">
            </label>
        </div>
        <div id="cmb_vta_recibo_item_generico_gral_fp_forma_pago_id_<?php echo $key ?>_error" class="label-error"></div>
        
    </td>

    <td>
        <label class="boton vta_recibo_item_generico_quitar_item_recibo" title="<?php Lang::_lang('Quitar Item al Recibo') ?>" key='<?php echo $key ?>'><img src="imgs/btn_cancelar.png" width="15"></label>
    </td>
</tr>