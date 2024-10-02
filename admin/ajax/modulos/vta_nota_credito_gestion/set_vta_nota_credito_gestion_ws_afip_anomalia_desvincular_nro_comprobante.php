<?php
include "_autoload.php";

$vta_nota_credito_id = Gral::getVars(Gral::VARS_POST, "vta_nota_credito_id", 0);
$nro_comprobante = Gral::getVars(Gral::VARS_POST, "nro_comprobante", 0);

$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

if($vta_nota_credito){
    $vta_nota_credito->setAfipAnomaliaDesvincularNroComprobante($nro_comprobante);
}
// se realizan los controles de datos
$arr["error"] = false;


// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;