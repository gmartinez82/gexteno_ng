<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_proveedor = PrvProveedor::getOxId($id);
    if($prv_proveedor->getEstado() == 1){
        $prv_proveedor->setEstado(0);
    }else{
        $prv_proveedor->setEstado(1);
    }
    $prv_proveedor->cambiarEstado();
}        
?>

