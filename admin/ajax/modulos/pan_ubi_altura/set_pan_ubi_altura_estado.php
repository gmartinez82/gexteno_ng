<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PAN_UBI_ALTURA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pan_ubi_altura = PanUbiAltura::getOxId($id);
    if($pan_ubi_altura->getEstado() == 1){
        $pan_ubi_altura->setEstado(0);
    }else{
        $pan_ubi_altura->setEstado(1);
    }
    $pan_ubi_altura->cambiarEstado();
}        
?>

