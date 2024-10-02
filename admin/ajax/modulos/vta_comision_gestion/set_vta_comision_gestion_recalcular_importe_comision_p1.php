<?php

include "_autoload.php";

$chk_vta_comprobante = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante", 0);
$base_comisionable = Gral::getVars(Gral::VARS_POST, "base_comisionable", 0);

$porcentaje_comision = Gral::getVars(Gral::VARS_POST, "porcentaje_comision", 0);
$porcentaje_comision = Gral::getImporteDesdePriceFormatToDB($porcentaje_comision);

if($chk_vta_comprobante == 'true'){
    $importe_comision = $base_comisionable * ($porcentaje_comision/100);
    $arr['COMPROBANTE_IMPORTE_COMISION'] = $importe_comision;
    $arr['COMPROBANTE_IMPORTE_COMISION_FORMATEADO'] = Gral::_echoImp($importe_comision, false, true);
}else{
    $arr['COMPROBANTE_IMPORTE_COMISION'] = 0;
    $arr['COMPROBANTE_IMPORTE_COMISION_FORMATEADO'] = Gral::_echoImp(0, false, true);    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>