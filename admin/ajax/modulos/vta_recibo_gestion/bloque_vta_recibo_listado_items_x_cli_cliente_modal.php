<?php
include_once "_autoload.php";

if (count($txt_descripcions) > 0) {
    ?>
    <table border='0' align='center' class='listado_vta_recibo_items' id='listado_vta_recibo_items_confirmacion' multiseleccion = "<?php echo $control_presupuesto ?>">
        <tr>

            <th width='300' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Concepto') ?>
            </th>

            <th width='300' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Descripcion') ?>
            </th>

            <th width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Importe') ?>
            </th>

            <th width='200' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Forma de Pago') ?>
            </th>
        </tr>

        <?php
        foreach ($txt_descripcions as $key => $txt_descripcion) {
                        
            $gral_fp_forma_pago_id = $cmb_gral_fp_forma_pago_ids[$key];
            $gral_fp_forma_pago = GralFpFormaPago::getOxId($gral_fp_forma_pago_id);
            
            $vta_recibo_concepto_id = $cmb_vta_recibo_concepto_ids[$key];
            $vta_recibo_concepto = VtaReciboConcepto::getOxId($vta_recibo_concepto_id);
            
            $txt_importe_unitario = $txt_importe_unitarios[$key];

            $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);
            
            ?>
            <tr id="tr_vta_recibo_uno_<?php Gral::_echo($key) ?>" class="uno">
                
                <td align="center">
                    <div class="vta_recibo_concepto" id="cmb_vta_recibo_concepto_id[<?php echo $key ?>]" name="cmb_vta_recibo_concepto_id[<?php echo $key ?>]">
                        <?php Gral::_echo($vta_recibo_concepto->getDescripcion()) ?>
                    </div>
                </td>
                
                <td width='500'>
                    <div align="left" class="descripcion" id="txt_descripcion_<?php echo $key ?>" name="txt_descripcion[<?php echo $key ?>]">
                        <?php Gral::_echoTxt($txt_descripcions[$key]) ?>
                    </div>
                </td>

                <td align="right">
                    <div class="importe_unitario">
                        <div id="txt_importe_unitario_<?php echo $key ?>" name="txt_importe_unitario[<?php echo $key ?>]">
                            <?php Gral::_echoImp($txt_importe_unitario) ?>
                        </div>
                    </div>
                </td>
                
                <td align="center">
                    <div class="gral_fp_forma_pago" id="cmb_gral_fp_forma_pago_id[<?php echo $key ?>]" name="cmb_gral_fp_forma_pago_id[<?php echo $key ?>]">
                        <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                    </div>
                </td>
                
            </tr>

        <?php } ?>
    </table>

    <br>
    <br>
<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron Items.') ?></div>
    </div>
<?php } ?>
