<?php
include_once "_autoload.php";

$importe_total_neto = 0;
$importe_total_iva = 0;

if (count($txt_descripcions) > 0) {
    foreach ($txt_descripcions as $key => $txt_descripcion) {

        $importe_unitario = $txt_importe_unitarios[$key];
        $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

        $gral_fp_forma_pago_id = $cmb_gral_fp_forma_pago_ids[$key];
        $gral_fp_forma_pago = GralFpFormaPago::getOxId($gral_fp_forma_pago_id);

        $arr_total_forma_pagos[$gral_fp_forma_pago_id]['IMPORTE'] += $importe_unitario;
        $arr_total_forma_pagos[$gral_fp_forma_pago_id]['DESCRIPCION'] = $gral_fp_forma_pago->getDescripcion();

        $importe_total += $importe_unitario;
    }
    ?>
    <table border='0' align='center' class='detalle_pde_comprobante_total' id='detalle_pde_comprobante_total'>

        <?php if (count($arr_total_forma_pagos) > 0) { ?>
            <tr class="forma-pago">
                <td width='120' align='left'>
                    <?php Lang::_lang('Forma de Pago') ?>:
                </td>
                <td width='200'>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php foreach ($arr_total_forma_pagos as $arr_total_forma_pago) { ?>
                <tr class="forma-pago">
                    <td>&nbsp;</td>
                    <td>
                        <?php Lang::_lang($arr_total_forma_pago['DESCRIPCION']) ?>
                    </td>
                    <td align='right'>
                        <?php Gral::_echoImp($arr_total_forma_pago['IMPORTE']) ?>              
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>

        <tr class="total">
            <td>
                <?php Lang::_lang('Total:') ?>
            </td>
            <td>&nbsp;</td>
            <td align='right'>
                <?php Gral::_echoImp($importe_total) ?>                
            </td>
        </tr>
    </table>

<?php } ?>