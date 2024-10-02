<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_MEDIO_PAGO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_medio_pago = GralMedioPago::getOxId($id);
    if($gral_medio_pago->getEstado() == 1){
        $gral_medio_pago->setEstado(0);
    }else{
        $gral_medio_pago->setEstado(1);
    }
    $gral_medio_pago->cambiarEstado();
}        
?>

