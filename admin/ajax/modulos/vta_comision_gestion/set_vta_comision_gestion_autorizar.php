<?php

include_once '_autoload.php';

$vta_comision_id = Gral::getVars(Gral::VARS_POST, 'vta_comision_id', 0);
$vta_comision = VtaComision::getOxId($vta_comision_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
}

if (!$arr["error"]) {

    // se registra nuevo estado
    $vta_comision_estado = $vta_comision->setVtaComisionEstado(
            VtaComisionTipoEstado::TIPO_AUTORIZADO, $txa_observacion
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>