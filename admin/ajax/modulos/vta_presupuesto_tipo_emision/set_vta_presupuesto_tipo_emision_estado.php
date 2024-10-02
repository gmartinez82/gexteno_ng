<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_TIPO_EMISION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_presupuesto_tipo_emision = VtaPresupuestoTipoEmision::getOxId($id);
    if($vta_presupuesto_tipo_emision->getEstado() == 1){
        $vta_presupuesto_tipo_emision->setEstado(0);
    }else{
        $vta_presupuesto_tipo_emision->setEstado(1);
    }
    $vta_presupuesto_tipo_emision->cambiarEstado();
}        
?>

