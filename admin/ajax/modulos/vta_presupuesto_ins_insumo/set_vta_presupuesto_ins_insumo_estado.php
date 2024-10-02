<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($id);
    if($vta_presupuesto_ins_insumo->getEstado() == 1){
        $vta_presupuesto_ins_insumo->setEstado(0);
    }else{
        $vta_presupuesto_ins_insumo->setEstado(1);
    }
    $vta_presupuesto_ins_insumo->cambiarEstado();
}        
?>

