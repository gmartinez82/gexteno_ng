<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_CAJA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_caja = GralCaja::getOxId($id);
    if($gral_caja->getEstado() == 1){
        $gral_caja->setEstado(0);
    }else{
        $gral_caja->setEstado(1);
    }
    $gral_caja->cambiarEstado();
}        
?>

