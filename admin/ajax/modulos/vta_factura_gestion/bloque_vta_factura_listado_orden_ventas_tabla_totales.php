<?php
include_once "_autoload.php";

$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);

$importe_total_neto_gravado = 0;
$importe_total_neto_no_gravado = 0;
$importe_total_neto_exento = 0;

$importe_total_iva = 0;

if (count($vta_orden_venta_ids) > 0) {
    foreach ($vta_orden_venta_ids as $key => $vta_orden_venta_id) {

        $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
        $gral_tipo_iva = $vta_orden_venta->getGralTipoIva();
        $gral_tipo_iva_id = $gral_tipo_iva->getId();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $valor_iva_decimal = $valor_iva / 100;

        $cantidad = $vta_orden_venta_cantidads[$key];
        $importe_unitario = $vta_orden_venta->getImporteUnitarioConDescuento(); // se considera el importe unitario con descuento incluido

        $importe_total_unitario = $importe_unitario * $cantidad;
        $importe_iva = $importe_total_unitario * $valor_iva_decimal;

        if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
            $arr_total_ivas[$gral_tipo_iva_id]['IMPORTE'] += $importe_iva;
            $arr_total_ivas[$gral_tipo_iva_id]['DESCRIPCION'] = $gral_tipo_iva->getDescripcion();
            
            $importe_total_neto_gravado += $importe_total_unitario;
        }
        if ($gral_tipo_iva && $gral_tipo_iva->getCodigo() == GralTipoIva::TIPO_EXENTO) {
            $importe_total_neto_exento += $importe_total_unitario;
        }
        if ($gral_tipo_iva && $gral_tipo_iva->getCodigo() == GralTipoIva::TIPO_NO_GRAVADO) {
            $importe_total_neto_no_gravado += $importe_total_unitario;
        }
        
        $importe_total_iva += $importe_iva;
    }

    $arr_vta_tributos_vigentes = $vta_factura->getTributosAAplicar($subtotal_calculado = $importe_total_neto_gravado);
    foreach ($arr_vta_tributos_vigentes as $arr_vta_tributo_vigente) {

        //Gral::prr($arr_vta_tributo_vigente);
        $vta_tributo_vigente = $arr_vta_tributo_vigente['vta_tributo'];
        $vta_tributo_vigente_aplica = $arr_vta_tributo_vigente['aplica'];
        $vta_tributo_vigente_exento = $arr_vta_tributo_vigente['exento'];
        $vta_tributo_vigente_supera_minimo = $arr_vta_tributo_vigente['supera_minimo'];

        if ($vta_tributo_vigente_aplica) {
            $alicuota_decimal = $vta_tributo_vigente->getAlicuotaDecimal();
            $importe_tributo = $importe_total_neto_gravado * $alicuota_decimal;

            $arr_total_tributos[$vta_tributo_vigente->getId()]['DESCRIPCION'] = $vta_tributo_vigente->getDescripcion();
            $arr_total_tributos[$vta_tributo_vigente->getId()]['APLICA'] = 1;
            $arr_total_tributos[$vta_tributo_vigente->getId()]['IMPORTE_ESTIMADO'] = $importe_tributo;
            $arr_total_tributos[$vta_tributo_vigente->getId()]['IMPORTE_APLICABLE'] = $importe_tributo;
            $arr_total_tributos[$vta_tributo_vigente->getId()]['OBSERVACION'] = '';

            // si es exento
            if ($vta_tributo_vigente_exento) {
                $arr_total_tributos[$vta_tributo_vigente->getId()]['APLICA'] = 0;
                $arr_total_tributos[$vta_tributo_vigente->getId()]['IMPORTE_APLICABLE'] = 0;
                $arr_total_tributos[$vta_tributo_vigente->getId()]['OBSERVACION'] = 'El cliente tiene una exencion vigente';
            }
            // si no cumple el minimo
            if (!$vta_tributo_vigente_supera_minimo) {
                $arr_total_tributos[$vta_tributo_vigente->getId()]['APLICA'] = 0;
                $arr_total_tributos[$vta_tributo_vigente->getId()]['IMPORTE_APLICABLE'] = 0;
                $arr_total_tributos[$vta_tributo_vigente->getId()]['OBSERVACION'] = 'No cumple el minimo previsto';
            }

            if ($arr_total_tributos[$vta_tributo_vigente->getId()]['APLICA'] == 1) {
                $importe_total_tributo += $importe_tributo;
            }
        }
    }
    //Gral::pr($importe_total_iva, 'iva');
    //Gral::pr($importe_total_neto_gravado, 'neto');
    //Gral::pr($importe_total_tributo, 'tributo');

    $importe_total = $importe_total_iva + $importe_total_neto_gravado + $importe_total_tributo;

    // se inicializa variable de configuracion 
    $cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();
    ?>
    <table border='0' align='center' class='detalle_vta_comprobante_total' id='detalle_vta_comprobante_total'>
        
        <tr class="subtotal">
            <td width='280' align='left' colspan="2">
                <?php Lang::_lang('Subtotal Neto Gravado') ?>:
            </td>
            <td width='70' align='left'>&nbsp;</td>
            <td width='140' align='right'>
                <?php Gral::_echoImp($importe_total_neto_gravado) ?>                
            </td>
        </tr>
        
        <tr class="subtotal">
            <td align='left' colspan="2">
                <?php Lang::_lang('Subtotal Exento') ?>:
            </td>
            <td align='left'>&nbsp;</td>
            <td align='right'>
                <?php Gral::_echoImp($importe_total_neto_exento) ?>                
            </td>
        </tr>
        
        <tr class="subtotal">
            <td align='left' colspan="2">
                <?php Lang::_lang('Subtotal No Gravado') ?>:
            </td>
            <td align='left'>&nbsp;</td>
            <td align='right'>
                <?php Gral::_echoImp($importe_total_neto_no_gravado) ?>                
            </td>
        </tr>
        

        <?php if (count($arr_total_ivas) > 0) { ?>
            <tr class="iva">
                <td>
                    <?php Lang::_lang('IVA') ?>:
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php foreach ($arr_total_ivas as $gral_tipo_iva_id => $arr_total_iva) { ?>
                <tr class="iva detalle">
                    <td>&nbsp;</td>
                    <td>
                        <?php Lang::_lang($arr_total_iva['DESCRIPCION']) ?>
                    </td>
                    <td>&nbsp;</td>
                    <td align='right'>
                        <?php Gral::_echoImp($arr_total_iva['IMPORTE']) ?>              
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>

        <?php if (count($arr_total_tributos) > 0) { ?>
            <tr class="otros-tributos">
                <td>
                    <?php Lang::_lang('Tributos:') ?>
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php foreach ($arr_total_tributos as $vta_tributo_id => $arr_total_tributo) { ?>
                <tr class="otros-tributos">
                    <td>&nbsp;</td>
                    <td>
                        <div class="tributo-descripcion">
                            <?php Lang::_lang($arr_total_tributo['DESCRIPCION']) ?>
                        </div>
                        <div class="tributo-observacion">
                            <?php Lang::_lang($arr_total_tributo['OBSERVACION']) ?>
                        </div>
                    </td>
                    <td align='right'>
                        <?php Gral::_echoImp($arr_total_tributo['IMPORTE_ESTIMADO']) ?>              
                    </td>
                    <td align='right'>
                        <?php Gral::_echoImp($arr_total_tributo['IMPORTE_APLICABLE']) ?>              
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>

        <tr class="total">
            <td>
                <?php Lang::_lang('Total:') ?>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td align='right'>
                <?php Gral::_echoImp($importe_total) ?>                
            </td>
        </tr>
    </table>

    <?php if (!$cli_cliente) { ?>
        <?php if ($importe_total >= $cv_importe_minimo_exigencia_info_comprador_consumidor_final) { ?>                    
            <div class="consumidor-final-solicitud-datos-alerta">
                El importe facturado supera los <?php Gral::_echoImp($cv_importe_minimo_exigencia_info_comprador_consumidor_final) ?> por lo que se debera solicitar informacion del comprador.
            </div>
        <?php } ?>   
    <?php } ?>   

<?php } ?>