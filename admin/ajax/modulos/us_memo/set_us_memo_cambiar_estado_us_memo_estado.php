<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_MEMO_ADM_ACCION_CONFIG_CAMBIAR_US_MEMO_ESTADO')){
    $id = Gral::getVars(1, 'id', 0);
    $cmb_us_memo_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_us_memo_tipo_estado_id', 0);
    $txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion');

    $us_memo = UsMemo::getOxId($id);

    // control de datos
    $arr["error"] = false;

    if ($cmb_us_memo_tipo_estado_id == 0){
        $arr["error"] = true;
        $arr["cmb_us_memo_tipo_estado_id"] = Lang::_lang("Debe ingresar un tipo de estado", true);
    }

    if (Ctrl::esVacio($txa_observacion)){
        $arr["error"] = true;
        $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
    }

    if (!$arr["error"]){
        $us_memo_tipo_estado = UsMemoTipoEstado::getOxId($cmb_us_memo_tipo_estado_id);
        $us_memo_estado = $us_memo->setUsMemoEstadoDesdeBackend($us_memo_tipo_estado->getCodigo(), $txa_observacion);
    }

    // se retornan datos
    $arr_json = json_encode($arr);
    echo $arr_json;
}

