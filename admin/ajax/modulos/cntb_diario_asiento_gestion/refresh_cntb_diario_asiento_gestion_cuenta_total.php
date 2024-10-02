<?php
include_once "_autoload.php";

$asiento_id = Gral::getVars(Gral::VARS_GET, 'asiento_id', 0);
if ($asiento_id != 0) {
    $cntb_diario_asiento = CntbDiarioAsiento::getOxId($asiento_id);
}
$arr_txt_importe_debe = Gral::getVars(Gral::VARS_GET, 'txt_importe_debe', 0);
$arr_txt_importe_haber = Gral::getVars(Gral::VARS_GET, 'txt_importe_haber', 0);

//Gral::prr($_GET);

$importe_debe_total_calculado = 0;
$importe_haber_total_calculado = 0;

foreach($arr_txt_importe_debe as $txt_importe_debe){
    $txt_importe_debe = Gral::getImporteDesdePriceFormatToDB($txt_importe_debe);
    $importe_debe_total_calculado+= $txt_importe_debe;    
}
foreach($arr_txt_importe_haber as $txt_importe_haber){
    $txt_importe_haber = Gral::getImporteDesdePriceFormatToDB($txt_importe_haber);
    $importe_haber_total_calculado+= $txt_importe_haber;    
}

include "cntb_diario_asiento_gestion_cuenta_total.php";