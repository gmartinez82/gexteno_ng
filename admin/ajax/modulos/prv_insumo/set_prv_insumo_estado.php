<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_INSUMO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_insumo = PrvInsumo::getOxId($id);
    if($prv_insumo->getEstado() == 1){
        $prv_insumo->setEstado(0);
    }else{
        $prv_insumo->setEstado(1);
    }
    $prv_insumo->cambiarEstado();
}        
?>

