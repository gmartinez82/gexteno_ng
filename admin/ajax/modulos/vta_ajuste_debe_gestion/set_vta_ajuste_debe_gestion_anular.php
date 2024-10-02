<?php

include_once '_autoload.php';

$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_POST, 'vta_ajuste_debe_id', 0);
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de anulacion", true);
}

if (!$arr["error"]) {
    // -------------------------------------------------------------------------
    // se registra nuevo estado
    // -------------------------------------------------------------------------
    $vta_ajuste_debe_estado = $vta_ajuste_debe->setAnularComprobanteSinCAE(
            $txa_observacion
    );    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>