<?php
include_once "_autoload.php";

if (count($txt_descripcions) > 0) {
    ?>
    <table border='0' align='center' class='listado_pde_factura_items' id='listado_pde_factura_items_confirmacion' multiseleccion = "<?php echo $control_presupuesto ?>">
        <tr>

            <th width='170' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Concepto') ?>
            </th>

            <th width='400' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Descripcion') ?>
            </th>

            <th width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Tipo de Iva') ?>
            </th>

            <th width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Unitario') ?>
            </th>

            <th width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp IVA') ?>
            </th>

            <th width='140' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Total') ?>
            </th>
        </tr>

        <?php
        foreach ($txt_descripcions as $key => $txt_descripcion) {
            $gral_tipo_iva_id = $cmb_gral_tipo_iva_ids[$key];
            $gral_tipo_iva = GralTipoIva::getOxId($gral_tipo_iva_id);

            $pde_factura_concepto_id = $cmb_pde_factura_concepto_ids[$key];
            $pde_factura_concepto = PdeFacturaConcepto::getOxId($pde_factura_concepto_id);
            
            $txt_importe_unitario = $txt_importe_unitarios[$key];
            $txt_importe_iva = $txt_importe_ivas[$key];
            $txt_importe_total = $txt_importe_totals[$key];
            
            $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);
            $txt_importe_iva = Gral::getImporteDesdePriceFormatToDB($txt_importe_iva);
            $txt_importe_total = Gral::getImporteDesdePriceFormatToDB($txt_importe_total);
            
            ?>
            <tr id="tr_pde_factura_uno_<?php Gral::_echo($key) ?>" class="uno">
                <?php //include "bloque_modal_pde_factura_listado_uno.php"  ?>

                <td align="center">
                    <div class="pde_factura_concepto" id="cmb_pde_factura_concepto_id[<?php echo $key ?>]" name="cmb_pde_factura_concepto_id[<?php echo $key ?>]">
                        <?php Gral::_echo($pde_factura_concepto->getDescripcion()) ?>
                    </div>
                    <div class="label-error" id="cmb_pde_factura_concepto_id_<?php echo $key ?>_error"></div>
                </td>

                <td>
                    <div align="left" class="descripcion" id="txt_descripcion_<?php echo $key ?>" name="txt_descripcion[<?php echo $key ?>]">
                        <?php Gral::_echoTxt($txt_descripcions[$key]) ?>
                    </div>
                    <div class="label-error" id="txt_descripcion_<?php echo $key ?>_error"></div>
                </td>

                <td align="center">
                    <div class="gral_tipo_iva" id="cmb_gral_tipo_iva_id[<?php echo $key ?>]" name="cmb_gral_tipo_iva_id[<?php echo $key ?>]">
                        <?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?>
                    </div>
                    <div class="label-error" id="cmb_gral_tipo_iva_id_<?php echo $key ?>_error"></div>
                </td>

                <td align="right">
                    <div class="importe_unitario">
                        <div id="txt_importe_unitario_<?php echo $key ?>" name="txt_importe_unitario[<?php echo $key ?>]">
                            <?php Gral::_echoImp($txt_importe_unitario) ?>
                        </div>
                    </div>
                    <div class="label-error" id="txt_importe_unitario_<?php echo $key ?>_error"></div>
                </td>

                <td align="right">
                    <div class="importe_iva">
                        <div id="txt_importe_iva_<?php echo $key ?>" name="txt_importe_iva[<?php echo $key ?>]">
                            <?php Gral::_echoImp($txt_importe_iva) ?>
                        </div>
                    </div>
                    <div class="label-error" id="txt_importe_iva_<?php echo $key ?>_error"></div>
                </td>

                <td align="right">
                    <div class="importe_total">
                        <div id="txt_importe_total_<?php echo $key ?>" name="txt_importe_total[<?php echo $key ?>]">
                            <?php Gral::_echoImp($txt_importe_total) ?>
                        </div>
                    </div>
                    <div class="label-error" id="txt_importe_total_<?php echo $key ?>_error"></div>
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
