<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_INSUMO_COSTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_insumo_costo = InsInsumoCosto::getOxId($id);
    if($ins_insumo_costo->getEstado() == 1){
        $ins_insumo_costo->setEstado(0);
    }else{
        $ins_insumo_costo->setEstado(1);
    }
    $ins_insumo_costo->cambiarEstado();
}        
?>

