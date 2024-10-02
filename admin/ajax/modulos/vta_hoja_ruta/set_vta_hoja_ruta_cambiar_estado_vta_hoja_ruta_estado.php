<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ADM_ACCION_CONFIG_CAMBIAR_VTA_HOJA_RUTA_ESTADO')){
    $id = Gral::getVars(1, 'id', 0);
    $cmb_vta_hoja_ruta_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_hoja_ruta_tipo_estado_id', 0);
    $txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion');

    $vta_hoja_ruta = VtaHojaRuta::getOxId($id);

    // control de datos
    $arr["error"] = false;

    if ($cmb_vta_hoja_ruta_tipo_estado_id == 0){
        $arr["error"] = true;
        $arr["cmb_vta_hoja_ruta_tipo_estado_id"] = Lang::_lang("Debe ingresar un tipo de estado", true);
    }

    if (Ctrl::esVacio($txa_observacion)){
        $arr["error"] = true;
        $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
    }

    if (!$arr["error"]){
        $vta_hoja_ruta_tipo_estado = VtaHojaRutaTipoEstado::getOxId($cmb_vta_hoja_ruta_tipo_estado_id);
        $vta_hoja_ruta_estado = $vta_hoja_ruta->setVtaHojaRutaEstadoDesdeBackend($vta_hoja_ruta_tipo_estado->getCodigo(), $txa_observacion);
    }

    // se retornan datos
    $arr_json = json_encode($arr);
    echo $arr_json;
}

