<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_presupuesto_ins_insumo = new VtaPresupuestoInsInsumo();
    $vta_presupuesto_ins_insumo->setId($id, false);
    $vta_presupuesto_ins_insumo->deleteAll();
}    
?>

