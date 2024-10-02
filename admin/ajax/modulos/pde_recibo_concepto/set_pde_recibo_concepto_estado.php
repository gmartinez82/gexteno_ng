<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_RECIBO_CONCEPTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_recibo_concepto = PdeReciboConcepto::getOxId($id);
    if($pde_recibo_concepto->getEstado() == 1){
        $pde_recibo_concepto->setEstado(0);
    }else{
        $pde_recibo_concepto->setEstado(1);
    }
    $pde_recibo_concepto->cambiarEstado();
}        
?>

