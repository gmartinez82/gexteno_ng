<?php

include "_autoload.php";

$vta_nota_debito_id = Gral::getVars(Gral::VARS_POST, "vta_nota_debito_id", 0);
$nro_comprobante = Gral::getVars(Gral::VARS_POST, "nro_comprobante", 0);
$ws_fe_ope_solicitud_id = Gral::getVars(Gral::VARS_POST, "ws_fe_ope_solicitud_id", 0);

$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
$ws_fe_ope_solicitud = WsFeOpeSolicitud::getOxId($ws_fe_ope_solicitud_id);


if ($vta_nota_debito && $ws_fe_ope_solicitud) {
    $vta_nota_debito->setAfipAnomaliaClonarNroComprobante($ws_fe_ope_solicitud);
}
// se realizan los controles de datos
$arr["error"] = false;


// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
