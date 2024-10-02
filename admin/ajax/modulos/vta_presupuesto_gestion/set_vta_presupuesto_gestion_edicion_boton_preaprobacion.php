<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$vta_presupuesto_tipo_emision = VtaPresupuestoTipoEmision::getOxCodigo(VtaPresupuestoTipoEmision::TIPO_DIFERIDO);

include "set_control_vta_presupuesto.php";

if (!$arr["error"]) {

    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
    
    if ($vta_presupuesto) {

        if ($vta_presupuesto->getVtaPresupuestoTipoEstado()->getCodigo() != VtaPresupuestoTipoEstado::TIPO_APROBADO) {

            include "set_vta_presupuesto_guardar.php";

            // ---------------------------------------------------------------------
            // se registran el estado de PREAPROBADO
            // ---------------------------------------------------------------------
            $tipo_estado_preaprobado = VtaPresupuestoTipoEstado::TIPO_PREAPROBADO;
            $vta_presupuesto->setVtaPresupuestoEstadoCustom($tipo_estado_preaprobado, $txa_observacion);
        }    
        
        // ---------------------------------------------------------------------
        // se abandona el presupuesto
        // ---------------------------------------------------------------------
        VtaPresupuesto::abandonarPresupuesto();
        
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>