<?php
include_once "_autoload.php";

$pde_oc_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_oc", null);
$pde_oc_cantidads = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_cantidad", null);

$importe_total_neto = 0;
$importe_total_iva = 0;

$iva_incluido = false;

$arr_total_ivas = array();

if (count($pde_oc_ids) > 0) {
    foreach ($pde_oc_ids as $key => $pde_oc_id) {

        $pde_oc = PdeOc::getOxId($pde_oc_id);
        $ins_insumo = $pde_oc->getInsInsumo();
        $gral_tipo_iva = $ins_insumo->getGralTipoIvaCompraObj();
        $gral_tipo_iva_id = $gral_tipo_iva->getId();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $valor_iva_decimal = $valor_iva / 100;
        
        $iva_incluido = $pde_oc->getIvaIncluido();

        $cantidad_seleccionada = $pde_oc_cantidads[$key];
        //$importe_unitario = $pde_oc->getImporteUnidad();
        
        $importe_unitario_sin_descuento = $pde_oc_importe_unitarios[$key];
        $importe_unitario_sin_descuento = Gral::getImporteDesdePriceFormatToDB($importe_unitario_sin_descuento);

        $porcentaje_descuento = $pde_oc_porcentaje_descuentos[$key];
        $porcentaje_descuento = Gral::getImporteDesdePriceFormatToDB($porcentaje_descuento);

        if ($porcentaje_descuento > 0) {
            $importe_descuento = ($importe_unitario_sin_descuento * ($porcentaje_descuento / 100));

            $importe_unitario_con_descuento = $importe_unitario_sin_descuento - $importe_descuento;
            $importe_total_con_descuento = $importe_unitario_con_descuento * $cantidad_seleccionada;
        } else {
            $importe_unitario_con_descuento = $importe_unitario_sin_descuento;
            $importe_total_con_descuento = $importe_unitario_con_descuento * $cantidad_seleccionada;
        }

        if($iva_incluido){
            $importe_iva = $importe_total_con_descuento - ($importe_total_con_descuento / $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo());

            $arr_total_ivas[$gral_tipo_iva_id]['IMPORTE'] += $importe_iva;
            $arr_total_ivas[$gral_tipo_iva_id]['ID'] = $gral_tipo_iva->getId();
            $arr_total_ivas[$gral_tipo_iva_id]['CODIGO'] = $gral_tipo_iva->getCodigo();
            $arr_total_ivas[$gral_tipo_iva_id]['DESCRIPCION'] = $gral_tipo_iva->getDescripcion();
            
            $importe_total_iva += $importe_iva;
        }else{
            $importe_iva = $importe_total_con_descuento * $valor_iva_decimal;

            $arr_total_ivas[$gral_tipo_iva_id]['IMPORTE'] += $importe_iva;
            $arr_total_ivas[$gral_tipo_iva_id]['ID'] = $gral_tipo_iva->getId();
            $arr_total_ivas[$gral_tipo_iva_id]['CODIGO'] = $gral_tipo_iva->getCodigo();
            $arr_total_ivas[$gral_tipo_iva_id]['DESCRIPCION'] = $gral_tipo_iva->getDescripcion();
            
            $importe_total_iva += $importe_iva;            
        }
        
        $importe_total_neto += $importe_total_con_descuento;
    }

    if($iva_incluido){
        $importe_total = $importe_total_neto;        
    }else{
        $importe_total = $importe_total_neto + $importe_total_iva;        
    }
    ?>
    <table border='0' align='center' class='detalle_pde_comprobante_total' id='detalle_pde_comprobante_total'>
        
        <?php if ($iva_incluido) { ?>
            <tr class="subtotal">
                <td width='160' align='left'>
                    <?php Lang::_lang('Subtotal IVA Incluido') ?>:
                </td>
                <td width='150' align='left'>&nbsp;</td>
                <td width='140' align='right'>
                    <?php Gral::_echoImp($importe_total_neto) ?>                
                    <input type="hidden" size="10" id="txt_comprobante_subtotal" name="txt_comprobante_subtotal" class="textbox txt_comprobante_subtotal" value="<?php Gral::_echo($importe_total_neto) ?>" />
                </td>
            </tr>
        <?php }else{ ?>
            <tr class="subtotal">
                <td width='160' align='left'>
                    <?php Lang::_lang('Subtotal') ?>:
                </td>
                <td width='150' align='left'>&nbsp;</td>
                <td width='140' align='right'>
                    <?php Gral::_echoImp($importe_total_neto) ?>                
                    <input type="hidden" size="10" id="txt_comprobante_subtotal" name="txt_comprobante_subtotal" class="textbox txt_comprobante_subtotal" value="<?php Gral::_echo($importe_total_neto) ?>" />
                </td>
            </tr>
        <?php } ?>

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