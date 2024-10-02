<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ADM_ACCION_CONFIG_CAMBIAR_PRD_ORDEN_TRABAJO_OPERACION_ESTADO')){
    $id = Gral::getVars(1, 'id', 0);
    $cmb_prd_orden_trabajo_operacion_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_prd_orden_trabajo_operacion_tipo_estado_id', 0);
    $txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion');

    $prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($id);

    // control de datos
    $arr["error"] = false;

    if ($cmb_prd_orden_trabajo_operacion_tipo_estado_id == 0){
        $arr["error"] = true;
        $arr["cmb_prd_orden_trabajo_operacion_tipo_estado_id"] = Lang::_lang("Debe ingresar un tipo de estado", true);
    }

    if (Ctrl::esVacio($txa_observacion)){
        $arr["error"] = true;
        $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
    }

    if (!$arr["error"]){
        $prd_orden_trabajo_operacion_tipo_estado = PrdOrdenTrabajoOperacionTipoEstado::getOxId($cmb_prd_orden_trabajo_operacion_tipo_estado_id);
        $prd_orden_trabajo_operacion_estado = $prd_orden_trabajo_operacion->setPrdOrdenTrabajoOperacionEstadoDesdeBackend($prd_orden_trabajo_operacion_tipo_estado->getCodigo(), $txa_observacion);
    }

    // se retornan datos
    $arr_json = json_encode($arr);
    echo $arr_json;
}

