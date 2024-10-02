<?php
include_once "_autoload.php";

$importe_total_neto = 0;
$importe_total_iva = 0;

if (count($txt_descripcions) > 0) {
    foreach ($txt_descripcions as $key => $txt_descripcion) {

        $gral_tipo_iva_id = $cmb_gral_tipo_iva_ids[$key];
        $gral_tipo_iva = GralTipoIva::getOxId($gral_tipo_iva_id);
        $valor_iva = $gral_tipo_iva->getValorIva();
        $valor_iva_decimal = $valor_iva / 100;
        //$cantidad = $txt_cantidads[$key];
        $cantidad = 1;
        $importe_unitario = $txt_importe_unitarios[$key];
        $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

        $importe_total_unitario = $importe_unitario * $cantidad;
        $importe_iva = $importe_total_unitario * $valor_iva_decimal;
        $arr_total_ivas[$gral_tipo_iva_id]['IMPORTE'] += $importe_iva;
        $arr_total_ivas[$gral_tipo_iva_id]['DESCRIPCION'] = $gral_tipo_iva->getDescripcion();

        $importe_total_neto += $importe_total_unitario;
        $importe_total_iva += $importe_iva;
    }

    $pde_tributos_vigentes = $pde_nota_credito->getTributosAAplicar();
    foreach ($pde_tributos_vigentes as $pde_tributos_vigente) {
        $alicuota_decimal = $pde_tributos_vigente->getAlicuotaDecimal();
        $importe_tributo = $importe_total_neto * $alicuota_decimal;

        $arr_total_tributos[$pde_tributos_vigente->getId()]['IMPORTE'] = $importe_tributo;
        $arr_total_tributos[$pde_tributos_vigente->getId()]['DESCRIPCION'] = $pde_tributos_vigente->getDescripcion();

        $importe_total_tributo += $importe_tributo;
    }

    $importe_total += $importe_total_iva + $importe_total_neto + $importe_total_tributo;
    ?>
    <table border='0' align='center' class='detalle_pde_comprobante_total' id='detalle_pde_comprobante_total'>
        <tr class="subtotal">
            <td width='70' align='left'>
                <?php Lang::_lang('Subtotal') ?>:
            </td>
            <td width='150' align='left'>&nbsp;</td>
            <td width='140' align='right'>
                <?php Gral::_echoImp($importe_total_neto) ?>                
                <input type="hidden" size="10" id="txt_comprobante_subtotal" name="txt_comprobante_subtotal" class="textbox txt_comprobante_subtotal" value="<?php Gral::_echo($importe_total_neto) ?>" />
            </td>
        </tr>

        <?php if (count($arr_total_ivas) > 0) { ?>
            <tr class="iva">
                <td>
                    <?php Lang::_lang('IVA') ?>:
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php foreach ($arr_total_ivas as $gral_tipo_iva_id => $arr_total_iva) { ?>
                <tr class="iva detalle">
                    <td>&nbsp;</td>
                    <td>
                        <?php Lang::_lang($arr_total_iva['DESCRIPCION']) ?>
                    </td>
                    <td align='right'>
                        <?php Gral::_echoImp($arr_total_iva['IMPORTE']) ?>              
                        <input type="hidden" size="10" id="txt_comprobante_iva_<?php echo $arr_total_iva['ID'] ?>" name="txt_comprobante_iva[<?php echo $arr_total_iva['ID'] ?>]" class="textbox txt_comprobante_iva" value="<?php Gral::_echo($arr_total_iva['IMPORTE']) ?>" />
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>

        <tr class="otros-tributos">
            <td>
                <?php Lang::_lang('Tributos:') ?>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <?php foreach (PdeTributo::getPdeTributosPercepcion() as $pde_tributo) { ?>
            <tr class="otros-tributos">
                <td>&nbsp;</td>
                <td>
                    <?php Lang::_lang($pde_tributo->getDescripcion()) ?>
                </td>
                <td align='right'>
                    <input type="text" size="10" id="txt_comprobante_tributo_<?php echo $pde_tributo->getId() ?>" name="txt_comprobante_tributo[<?php echo $pde_tributo->getId() ?>]" class="moneda textbox txt_comprobante_tributo" value="" />
                </td>
            </tr>
        <?php } ?>

        <tr class="total">
            <td>
                <?php Lang::_lang('Total:') ?>
            </td>
            <td>&nbsp;</td>
            <td align='right'>
                <div id="div_comprobante_total">
                    <?php Gral::_echoImp($importe_total) ?>                
                </div>
                <input type="hidden" size="10" id="txt_comprobante_total" name="txt_comprobante_total" class="textbox txt_comprobante_total" value="<?php Gral::_echo($importe_total) ?>" />
            </td>
        </tr>
    </table>

<?php } ?>
