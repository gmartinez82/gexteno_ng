<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_INSUMO_COSTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_insumo_costo = PrvInsumoCosto::getOxId($id);
    if($prv_insumo_costo->getEstado() == 1){
        $prv_insumo_costo->setEstado(0);
    }else{
        $prv_insumo_costo->setEstado(1);
    }
    $prv_insumo_costo->cambiarEstado();
}        
?>

