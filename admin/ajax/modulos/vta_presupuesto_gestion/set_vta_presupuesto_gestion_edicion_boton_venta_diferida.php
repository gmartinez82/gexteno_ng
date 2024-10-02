<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$vta_presupuesto_tipo_emision = VtaPresupuestoTipoEmision::getOxCodigo(VtaPresupuestoTipoEmision::TIPO_DIFERIDO);

include "set_control_vta_presupuesto.php";

if (!$arr["error"]) {

    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
    
    if ($vta_presupuesto) {

        include "set_vta_presupuesto_guardar.php";

        // ---------------------------------------------------------------------
        // se registran las OV
        // ---------------------------------------------------------------------
        $vta_orden_ventas = $vta_presupuesto->setGenerarVtaOrdenVentas($chk_vta_presupuesto_ins_insumo);
        
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