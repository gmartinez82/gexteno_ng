<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_presupuesto = VtaPresupuesto::getOxId($id);
    if($vta_presupuesto->getEstado() == 1){
        $vta_presupuesto->setEstado(0);
    }else{
        $vta_presupuesto->setEstado(1);
    }
    $vta_presupuesto->cambiarEstado();
}        
?>

