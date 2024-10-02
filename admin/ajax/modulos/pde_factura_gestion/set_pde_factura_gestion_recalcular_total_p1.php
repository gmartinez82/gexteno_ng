<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');


$pde_factura_id = Gral::getVars(Gral::VARS_POST, "pde_factura_id", 0);

$chk_pde_ocs = Gral::getVars(Gral::VARS_POST, "chk_pde_oc", 0);
$txt_pde_oc_cantidads = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_cantidad", 0);
$txt_pde_oc_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_importe_unitario", 0);
$txt_pde_oc_porcentaje_descuentos = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_porcentaje_descuento", 0);

$importe_subtotal_con_descuento = 0;
$importe_subtotal_iva = 0;
$importe_total = 0;

$pde_factura = PdeFactura::getOxId($pde_factura_id);
if($pde_factura){
    $importe_subtotal_con_descuento = $pde_factura->getPdeFacturaSubtotal();
    $importe_subtotal_iva = $pde_factura->getImporteIvaImporte();
    $importe_subtotal_tributos = $pde_factura->getImporteTributoImporte();
    $importe_total = $pde_factura->getPdeFacturaTotal();
}

$arr['COMPROBANTE_SELECCIONADO'] = false;

$arr['COMPROBANTE_SUBTOTAL_CON_DESCUENTO'] = $importe_subtotal_con_descuento;
$arr['COMPROBANTE_SUBTOTAL_CON_DESCUENTO_FORMATEADO'] = Gral::_echoImp($importe_subtotal_con_descuento, false, true);

$arr['COMPROBANTE_SUBTOTAL_IVA'] = $importe_subtotal_iva;
$arr['COMPROBANTE_SUBTOTAL_IVA_FORMATEADO'] = Gral::_echoImp($importe_subtotal_iva, false, true);    

$arr['COMPROBANTE_TOTAL'] = $importe_total;
$arr['COMPROBANTE_TOTAL_FORMATEADO'] = Gral::_echoImp($importe_total, false, true);    

// se agregan los iva
if (is_array($chk_pde_ocs) && count($chk_pde_ocs) > 0) {
    foreach ($chk_pde_ocs as $i => $chk_pde_oc) {
        $arr['COMPROBANTE_SELECCIONADO'] = true;
        
        $pde_oc = PdeOc::getOxId($i);
        $ins_insumo = $pde_oc->getInsInsumo();
        
        $gral_tipo_iva_compra = $ins_insumo->getGralTipoIvaCompraObj();
        $gral_tipo_iva_compra_decimal = $gral_tipo_iva_compra->getValorIvaDecimal();
        
        $txt_pde_oc_cantidad = $txt_pde_oc_cantidads[$i];

        $txt_pde_oc_importe_unitario = $txt_pde_oc_importe_unitarios[$i];
        $txt_pde_oc_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_pde_oc_importe_unitario);

        $txt_pde_oc_porcentaje_descuento = $txt_pde_oc_porcentaje_descuentos[$i];
        $txt_pde_oc_porcentaje_descuento = Gral::getImporteDesdePriceFormatToDB($txt_pde_oc_porcentaje_descuento);

        //Gral::pr($txt_pde_oc_importe_unitario);
        //Gral::pr($txt_pde_oc_porcentaje_descuento);

        if ($txt_pde_oc_porcentaje_descuento > 0) {
            $porcentaje_descuento = ($txt_pde_oc_porcentaje_descuento / 100);
            $importe_descuento = $txt_pde_oc_importe_unitario * $porcentaje_descuento;

            $importe_oc_unitario_sin_descuento = $txt_pde_oc_importe_unitario;
            $importe_oc_unitario_con_descuento = $txt_pde_oc_importe_unitario - $importe_descuento;
        } else {
            $importe_oc_unitario_sin_descuento = $txt_pde_oc_importe_unitario;
            $importe_oc_unitario_con_descuento = $txt_pde_oc_importe_unitario;
        }
        
        // se calcula el IVA
        $importe_subtotal_iva+= ($importe_oc_unitario_con_descuento * $gral_tipo_iva_compra_decimal) * $txt_pde_oc_cantidad;

        $importe_oc_subtotal_con_descuento = $txt_pde_oc_cantidad * $importe_oc_unitario_con_descuento;
        $importe_subtotal_con_descuento += $importe_oc_subtotal_con_descuento;
        
        $arr['COMPROBANTE_OC'][$i]['IMPORTE_OC_UNITARIO'] = $importe_oc_unitario_con_descuento;
        $arr['COMPROBANTE_OC'][$i]['IMPORTE_OC_UNITARIO_FORMATEADO'] = Gral::_echoImp($importe_oc_unitario_con_descuento, false, true);

        $arr['COMPROBANTE_OC'][$i]['IMPORTE_OC_TOTAL'] = $importe_oc_subtotal_con_descuento;
        $arr['COMPROBANTE_OC'][$i]['IMPORTE_OC_TOTAL_FORMATEADO'] = Gral::_echoImp($importe_oc_subtotal_con_descuento, false, true);
        ;
    }
    
    $importe_total = $importe_subtotal_con_descuento + $importe_subtotal_iva + $importe_subtotal_tributos;

    $arr['COMPROBANTE_SUBTOTAL_CON_DESCUENTO'] = $importe_subtotal_con_descuento;
    $arr['COMPROBANTE_SUBTOTAL_CON_DESCUENTO_FORMATEADO'] = Gral::_echoImp($importe_subtotal_con_descuento, false, true);

    $arr['COMPROBANTE_SUBTOTAL_IVA'] = $importe_subtotal_iva;
    $arr['COMPROBANTE_SUBTOTAL_IVA_FORMATEADO'] = Gral::_echoImp($importe_subtotal_iva, false, true);
    
    $arr['COMPROBANTE_TOTAL'] = $importe_total;
    $arr['COMPROBANTE_TOTAL_FORMATEADO'] = Gral::_echoImp($importe_total, false, true);    
    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>