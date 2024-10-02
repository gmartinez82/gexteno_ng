<?php
include "_autoload.php";

$vta_factura_id = Gral::getVars(Gral::VARS_POST, "vta_factura_id", 0);
$nro_comprobante = Gral::getVars(Gral::VARS_POST, "nro_comprobante", 0);

$vta_factura = VtaFactura::getOxId($vta_factura_id);

if($vta_factura){
    $vta_factura->setAfipAnomaliaDesvincularNroComprobante($nro_comprobante);
}
// se realizan los controles de datos
$arr["error"] = false;


// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;