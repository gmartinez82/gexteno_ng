<?php

include "_autoload.php";

$txa_cancelar_observacion = Gral::getVars(Gral::VARS_POST, "txa_cancelar_observacion", '');
$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_ins_insumo_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_cancelar_observacion)) {
    $arr["txa_cancelar_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
    if ($vta_presupuesto_ins_insumo) {
        $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_ins_insumo->getVtaPresupuestoId());
        if ($vta_presupuesto) {
            $vta_presupuesto_ins_insumo->setCancelarItemVtaPresupuestoGestionEdicion($txa_cancelar_observacion);
            $vta_presupuesto_ins_insumo->save();
            
            $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();
            $vta_presupuesto->save();
            
            // -----------------------------------------------------------------
            // se determina si existe conflicto para cada una de los items del presupuesto
            // -----------------------------------------------------------------
            $vta_presupuesto->setControlVtaPresupuestoConflicto();
        }
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>