<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$chk_vta_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante", 0);
$hdn_importe_base_comisionable = Gral::getVars(Gral::VARS_POST, "hdn_importe_base_comisionable", 0);
$hdn_importe_comisions = Gral::getVars(Gral::VARS_POST, "hdn_importe_comision", 0);

$importe_total = 0;

//Gral::prr($_POST);

$arr['COMPROBANTE_SELECCIONADO'] = false;

// se suman los comprobantes
if (is_array($chk_vta_comprobantes) && count($chk_vta_comprobantes) > 0) {
    foreach ($chk_vta_comprobantes as $i => $chk_vta_comprobante) {
        $arr['COMPROBANTE_SELECCIONADO'] = true;

        $txt_vta_comprobante_importe_base = $hdn_importe_base_comisionable[$i];
        $txt_vta_comprobante_importe_comision = $hdn_importe_comisions[$i];
        
        //Gral::pr(++$cont);
        //Gral::pr($txt_vta_comprobante_importe_comision);
        
        $txt_vta_comprobante_importe_base_total += $txt_vta_comprobante_importe_base;
        $txt_vta_comprobante_importe_comision_total += $txt_vta_comprobante_importe_comision;
    }

    $arr['COMPROBANTE_TOTAL_BASE'] = $txt_vta_comprobante_importe_base_total;
    $arr['COMPROBANTE_TOTAL_BASE_FORMATEADO'] = Gral::_echoImp($txt_vta_comprobante_importe_base_total, false, true);
    $arr['COMPROBANTE_TOTAL_COMISION'] = $txt_vta_comprobante_importe_comision_total;
    $arr['COMPROBANTE_TOTAL_COMISION_FORMATEADO'] = Gral::_echoImp($txt_vta_comprobante_importe_comision_total, false, true);
} else {
    $arr['COMPROBANTE_TOTAL_BASE'] = 0;
    $arr['COMPROBANTE_TOTAL_BASE_FORMATEADO'] = Gral::_echoImp(0, false, true);
    $arr['COMPROBANTE_TOTAL_COMISION'] = 0;
    $arr['COMPROBANTE_TOTAL_COMISION_FORMATEADO'] = Gral::_echoImp(0, false, true);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>